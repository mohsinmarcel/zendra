<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

/**
 * Class Helper
 * @package App\Helpers
 */
class Helper
{

   // Helper.php
    /**
     * Convert number of bytes largest unit bytes will fit into.
     * Extracted from WordPress core to work as a standalone function.
     *
     * @link https://codex.wordpress.org/Function_Reference/size_format
     *
     * @param int|string $bytes Number of bytes. Note max integer size for integers.
     * @param int $decimals Optional. Precision of number of decimal places. Default 0.
     *
     * @return string|false False on failure. Number string on success.
     */

     public static function getTokenFromHeader($header = 'Authorization')
     {
         $authorizeHeader = request()->headers->get($header);
         if ($authorizeHeader) {
             return str_replace('Bearer ', '', $authorizeHeader);
         } else {
             return false;
         }
     }

    public static function switchConnection($connectionName, $tenantId)
    {
        $tenantDatabase = 'tenant' . $tenantId;
        Config::set("database.connections.$connectionName.database", $tenantDatabase);
        DB::purge($connectionName);
        DB::reconnect($connectionName);
    }

    public static function sendEmail($template,$token,$email,$subject)
    {
        Mail::send($template, ['token' => $token], function ($message) use ($email, $subject) {
            $message->from(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
            $message->to($email);
            $message->subject($subject);
        });
    }

    public static function UploadSingleImage(Request $request, $fileName, $storingPath)
    {
        if ($request->hasFile($fileName) && $request->file($fileName)->isValid()) {
            $file = $request->file($fileName);
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $file->move(public_path($storingPath), $filename);
            return $storingPath . '/' . $filename;
        }
        return null;
    }

    public static function UploadMultipleImages(Request $request, $inputName, $storingPath)
    {
        $uploadedFiles = [];
        if ($request->hasFile($inputName)) {
            foreach ($request->file($inputName) as $file) {
                if ($file->isValid()) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = uniqid() . '.' . $extension;
                    $file->move(public_path($storingPath), $filename);
                    $uploadedFiles[] = $storingPath . '/' . $filename;
                }
            }
        }
        return $uploadedFiles;
    }

    public static function getBaseUrl() {
        // $baseUrl = 'https://4c67-175-107-200-233.ngrok-free.app';
         $baseUrl = 'http://zendra.test';
        return $baseUrl;
    }

    public static function getCategories() {
        $categories = Category::all();
        return $categories;
    }

    public static function getSaleProducts() {
        $sale = Product::where('is_on_sale',1)->where('is_featured',0)->get();
        return $sale;
    }

    public static function getFeaturedProducts() {
        $featured = Product::where('is_featured',1)->where('is_on_sale',0)->get();
        return $featured;
    }



}
