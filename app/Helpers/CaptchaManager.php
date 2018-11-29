<?php namespace App\Helpers;
use Illuminate\Http\Request;

	class CaptchaManager
	{
		protected	$CaptchaChars;
		protected	$Code;
		protected	$im;
		protected	$CaptchaImageSource;
		protected	$HiddenFieldName;
		protected	$CaptchaSessionField;
		protected	$FirstMathVar;
		protected	$SecondMathVar;
		protected	$ResultMathVar;
		protected	$fontFile;
		public		$SessionManager;
		private static $Instance ;
		

		//public function CaptchaManager($Height=200,$Width=60)
		public function __construct($Height=100,$Width=30)
		{
			$this->HiddenFieldName		=	'HiddenCaptchaField';
			//$this->SessionManager		=	$GLOBALS['SessionManager'];
			$this->CaptchaImageSource	=	'img.php';
			$this->fontFile				=	base_path() . '/' . 'app/Helpers/arial.ttf';
			$this->CaptchaSessionField	=	'FullonCaptcha';

			//$this->CaptchaChars			= array('1', '2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','J','K','M','N','P','Q','R','S','Y','U','V','W','X','Y','Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

			$this->CaptchaChars			= array('1', '2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','J','K','M','N','P','Q','R','S','Y','U','V','W','X','Y','Z');


			//$this->CaptchaChars			=	array('0','1','2','3','4','5','6','7','8','9');
    
			$this->Code					=	session($this->CaptchaSessionField);

			if(!$this->Code)
			{
				for($i = 0; $i < 5; $i++)
				{
					$rand_char	= rand(0, (count($this->CaptchaChars) -1));
					$this->Code .= $this->CaptchaChars[$rand_char];
				}
				//$request->session()->get('key');
				//$request->session()->put('key', 'value');
				//session
				session([$this->CaptchaSessionField => $this->Code]);
			}
		
		}

		public function GenerateNewCaptchaCode()
		{
			$this->Code	=	'';

			for($i = 0; $i < 5; $i++)
			{
				$rand_char	= rand(0, (count($this->CaptchaChars) -1));
				$this->Code .= $this->CaptchaChars[$rand_char];
			}

			session([$this->CaptchaSessionField => $this->Code]);
		}

		public function imagepalettetotruecolor(&$img)
		{
			if (!imageistruecolor($img))
			{
				$w = imagesx($img);
				$h = imagesy($img);
				$img1 = imagecreatetruecolor($w,$h);
				imagecopy($img1,$img,0,0,0,0,$w,$h);
				$img = $img1;
			}
		}

		public function OutputImage($Height=100,$Width=100)
		{
			//echo '<img src="img.php" border="0" name="vchRndCode">';
			$this->im	= imagecreate($Height,$Width);

			//$bg_color	= imagecolorallocate($this->im, 182, 208, 8);
			//$font_color = imagecolorallocate($this->im, 255, 255, 255);
			$bg_color = imagecolorallocate($this->im, 255, 255, 255);
			$font_color = imagecolorallocate($this->im, 0, 111, 255);


			$characters = preg_split("//", $this->Code, -1, PREG_SPLIT_NO_EMPTY);
			
			$x = 5;
			
			foreach($characters as $char)
			{
			
				$y = rand(20,20);
				$size = rand(8,14);
				$rotation = rand(-8,8);
				imagettftext($this->im, $size, $rotation, $x, $y, $font_color, $this->fontFile, $char);
				$x += 19;
			}
			
			
			
			$this->imagepalettetotruecolor($this->im);
			
			$imgh = imagesy($this->im);
			$imgw = imagesx($this->im);
			$yrand = mt_rand(30,60);
			$xrand = mt_rand(20,40);

			header("Content-type: image/png");
			imagepng($this->im);
			imagedestroy($this->im);
		}

		/*public function ShowCaptcha()
		{
			echo '<img src="'.$this->CaptchaImageSource.'" border="0" name="vchRndCode">';
		}*/

		public function ShowHiddenFieldName($Get = false)
		{
			if(!$Get)
			{
				echo $this->HiddenFieldName;
			}
			else
			{
				return $this->HiddenFieldName;
			}
			
		}

		public function GetCaptchaCode($Show = false)
		{
			if(!$Show)
			{
				return $this->Code;
			}
			echo $this->Code;
		}

		public function ShowHiddenCaptchaField($Get = false)
		{
			$Html = '<input type="hidden" name="'.$this->HiddenFieldName.'" value="'.$this->Code.'">';

			if(!$Get)
			{
				echo $Html;
			}
			else
			{
				return $Html;
			}
		}

		public function VerifyCaptcha($Value,$Type="image")
		{
			if(strtoupper($Type) == 'IMAGE')
			{
				$SessionCaptcha = session($this->CaptchaSessionField);

				if($SessionCaptcha <> '')
				{
					//$this->SessionManager->UnsetSessionElement($this->CaptchaSessionField);

					if($Value <> $SessionCaptcha)
					{
						return false;
					}

					return true;
				}

				if(@$_REQUEST[$this->HiddenFieldName] == $Value)
				{
					return true;
				}

				return false;
			}
			else
			{
				$SessionCaptcha	=	session('ResultMathVar');

				if($SessionCaptcha <> '')
				{
					$this->SessionManager->UnsetSessionElement('ResultMathVar');

					if($Value <> $SessionCaptcha)
					{
						return false;
					}

					return true;
				}

				return false;
			}
		}

		public function VerifyCaptchaAjax($Value,$Type="image")//copy of the above function VerifyCaptcha with the difference that the captcha stored in the session is not unset after checking...bcoz this will be used for checking thru ajax..and hence the form is not getting submitted..hence the captcha value has to be retainted in the session till the form is submitted...Rituraj 8/5/2011
		{
			if(strtoupper($Type) == 'IMAGE')
			{
				$SessionCaptcha	=	session($this->CaptchaSessionField);

				if($SessionCaptcha <> '')
				{
					//$this->SessionManager->UnsetSessionElement($this->CaptchaSessionField);

					if($Value <> $SessionCaptcha)
					{
						return false;
					}

					return true;
				}

				if(@$_REQUEST[$this->HiddenFieldName] == $Value)
				{
					return true;
				}

				return false;
			}
			else
			{
				$SessionCaptcha	=	session('ResultMathVar');

				if($SessionCaptcha <> '')
				{
					//$this->SessionManager->UnsetSessionElement('ResultMathVar');

					if($Value <> $SessionCaptcha)
					{
						return false;
					}

					return true;
				}

				return false;
			}
		}

		public function GenerateMathCaptcha()
		{
			$this->FirstMathVar		= rand(0, (count($this->CaptchaChars) -1));

			$this->SecondMathVar	= rand(0, (count($this->CaptchaChars) -1));

			$this->ResultMathVar	= $this->FirstMathVar + $this->SecondMathVar;

			session(['FirstMathVar' => $this->FirstMathVar]);

			session(['SecondMathVar' => $this->SecondMathVar]);

			session(['ResultMathVar' => $this->ResultMathVar]);
		}

		public function GetFirstMathVar()
		{
			if(!session('FirstMathVar'))
			{
				$this->GenerateMathCaptcha();
			}

			return session('FirstMathVar');
		}

		public function GetSecondMathVar()
		{
			if(!session('SecondMathVar'))
			{
				$this->GenerateMathCaptcha();
			}

			return session('SecondMathVar');
		}

		public function GetResultMathVar()
		{
			if(!session('ResultMathVar'))
			{
				$this->GenerateMathCaptcha();
			}

			return session('ResultMathVar');
		}

		public function OutputMathImage($Height=10,$Width=10,$MathImage = 'first',$BgColor = '')
		{
			if(!session('FirstMathVar'))
			{
				$this->GenerateMathCaptcha();
			}

			$BgColorArr	=	array(255,255,255);

			if($BgColor <> '')
			{
				$BgColorArr = sscanf($BgColor,'#%2x%2x%2x');
			}


			$this->im	= imagecreate($Height,$Width);

			//$bg_color	= imagecolorallocate($this->im, 255, 255, 255);
			$bg_color	= imagecolorallocate($this->im, $BgColorArr['0'], $BgColorArr['1'], $BgColorArr['2']);

			
			$font_color = imagecolorallocate($this->im, 0, 111, 255);

			$MathVar	=	strtoupper($MathImage) == 'FIRST'?session('FirstMathVar'):session('SecondMathVar');


			$characters = preg_split("//",$MathVar, -1, PREG_SPLIT_NO_EMPTY);
			
			$x = 5;
			
			foreach($characters as $char)
			{
			
				$y = rand(20,20);
				//$size = rand(8,14);

				$size = 15;
				$rotation = rand(-8,8);
				imagettftext($this->im, $size, $rotation, $x, $y, $font_color, $this->fontFile, $char);
				$x += 19;
			}
			
			
			
			$this->imagepalettetotruecolor($this->im);
			
			$imgh = imagesy($this->im);
			$imgw = imagesx($this->im);
			$yrand = mt_rand(30,60);
			$xrand = mt_rand(20,40);

			header("Content-type: image/png");
			imagepng($this->im);
			imagedestroy($this->im);
		}
	}

?>