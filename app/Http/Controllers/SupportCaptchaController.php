<?php

namespace App\Http\Controllers;

class SupportCaptchaController extends Controller
{
    /**
     * صورة PNG بأرقام مموّهة للتحقق من نموذج الدعم.
     */
    public function image()
    {
        if (! extension_loaded('gd')) {
            abort(503, 'GD extension is required for CAPTCHA.');
        }

        $code = (string) random_int(10000, 99999);
        session(['support_contact_captcha' => $code]);

        $width = 160;
        $height = 52;
        $im = imagecreatetruecolor($width, $height);

        $bg = imagecolorallocate($im, 248, 250, 252);
        imagefilledrectangle($im, 0, 0, $width, $height, $bg);

        for ($i = 0; $i < 8; $i++) {
            $lineColor = imagecolorallocate($im, random_int(180, 220), random_int(180, 220), random_int(180, 220));
            imageline(
                $im,
                random_int(0, $width),
                random_int(0, $height),
                random_int(0, $width),
                random_int(0, $height),
                $lineColor
            );
        }

        $len = strlen($code);
        $x = 10;
        for ($i = 0; $i < $len; $i++) {
            $textColor = imagecolorallocate($im, random_int(25, 70), random_int(25, 70), random_int(25, 70));
            imagestring(
                $im,
                5,
                $x + random_int(-2, 2),
                random_int(10, 18),
                $code[$i],
                $textColor
            );
            $x += 26;
        }

        for ($i = 0; $i < 120; $i++) {
            $px = imagecolorallocate($im, random_int(160, 230), random_int(160, 230), random_int(160, 230));
            imagesetpixel($im, random_int(0, $width - 1), random_int(0, $height - 1), $px);
        }

        ob_start();
        imagepng($im);
        imagedestroy($im);
        $binary = ob_get_clean();

        return response($binary, 200)
            ->header('Content-Type', 'image/png')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache');
    }
}
