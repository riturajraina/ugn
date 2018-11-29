<?php
    namespace App\Helpers;
    
    class ImageManager extends ValidatorBase
    {
        protected $type;
        protected $ext;
        
        public function __construct()
        {
            $this->type = null;
            $this->ext = null;
        }
        
        public function getImageType()
        {
            return $this->type;
        }
        
        public function getExt()
        {
            return $this->ext;
        }

        /*public function resize_image($file, $w, $h, $crop=FALSE) 
        {
            list($width, $height) = getimagesize($file);
            $r = $width / $height;
            if ($crop) {
                    if ($width > $height) {
                            $width = ceil($width-($width*abs($r-$w/$h)));
                    } else {
                            $height = ceil($height-($height*abs($r-$w/$h)));
                    }
                    $newwidth = $w;
                    $newheight = $h;
            } else {
                    if ($w/$h > $r) {
                            $newwidth = $h*$r;
                            $newheight = $h;
                    } else {
                            $newheight = $w/$r;
                            $newwidth = $w;
                    }
            }
            $src = imagecreatefromjpeg($file);
            $dst = imagecreatetruecolor($newwidth, $newheight);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

            return $dst;
        }*/

        function image_resize($src, $width, $height, $crop=0)
        {
            $dst = null;
            $img = null;
            $x = null;
            
            //if(!list($w, $h) = getimagesize($src)) return "Unsupported picture type!";
            $imageArray = getimagesize($src);
            if(!$imageArray) {
                return "Unsupported picture type!";
            }
            
            $w = $imageArray['0'];
            
            $h = $imageArray['1'];
            
            //echo '<br>image array : <pre>' . print_r($imageArray, true) . '</pre>';exit;
            
            $this->type = $imageArray['mime'];
            
            $extArray = explode('.', $src);
            
            $ext = null;
            
            /*
             * image/gif
             * image/jpeg
             * image/x-ms-bmp
             * image/png
             */
            
            if (is_array($extArray)) {
                $count = count($extArray);
                if ($count) {
                    $ext = $extArray[($count-1)];
                }
            }
            
            $ext = strtolower($ext);
            
            if (!stristr($ext, $this->type)) {
                $typeArray = explode('/' , $this->type);
                $ext = $typeArray['1'];
            }
            
            $this->ext = $ext;

            /*$ext = strtolower(substr(strrchr($src,"."),1));
            if($ext == 'jpeg') $ext = 'jpg';*/
            
            switch($ext){
              case 'bmp': 
                  $img = imagecreatefromwbmp($src); break;
              case 'gif': 
                  $img = imagecreatefromgif($src); break;
              case 'jpg': 
              case 'jpeg':
                  $img = imagecreatefromjpeg($src); break;
              case 'png': 
                  $img = imagecreatefrompng($src); break;
              default : return "Unsupported picture type!";
            }

            // resize
            if($crop){
              if($w < $width or $h < $height) return "Picture is too small!";
              $ratio = max($width/$w, $height/$h);
              $h = $height / $ratio;
              $x = ($w - $width / $ratio) / 2;
              $w = $width / $ratio;
            }
            else{
              if($w < $width and $h < $height) return "Picture is too small!";
              $ratio = min($width/$w, $height/$h);
              /*$width = $w * $ratio;
              $height = $h * $ratio;*/
              $x = 0;
            }

            $new = imagecreatetruecolor($width, $height);

            // preserve transparency
            if($ext == "gif" or $ext == "png"){
              imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
              imagealphablending($new, false);
              imagesavealpha($new, true);
            }

            imagecopyresampled($new, $img, 0, 0, $x, 0, $width, $height, $w, $h);
            
            //$this->type = $ext;

            /*switch($ext){
              case 'bmp': imagewbmp($new, $dst); break;
              case 'gif': imagegif($new, $dst); break;
              case 'jpg': imagejpeg($new, $dst); break;
              case 'png': imagepng($new, $dst); break;
            }*/
            return $new;
        }
    }