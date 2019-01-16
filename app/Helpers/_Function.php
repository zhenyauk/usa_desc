<?php
/**
 * Created by PhpStorm.
 * User: france
 * Date: 25.02.17
 * Time: 22:24
 */
namespace App\Helpers;


class _Function {

	public static function retranslit($in)
	{
		$trans1= array("'",'`',',',' ',"Ё","Ж","Ч","Ш","Щ","Э","Ю","Я","ё","ж","ч","ш","щ","э","ю","я","А","Б","В","Г","Д","Е","З","И","Й","К","Л","М","Н","О","П","Р","С","Т","У","Ф","Х","Ц","Ь","Ы","а","б","в","г","д","е","з","и","й","к","л","м","н","о","п","р","с","т","у","ф","х","ц","ь","ы","і","є","ґ");

		$trans2= array('_','_','_','_',"JO","ZH","CH","SH","SCH","Je","Jy","Ja","jo","zh","ch","sh","sch","je","jy","ja","A","B","V","G","D","E","Z","I","J","K","L","M","N","O","P","R","S","T","U","F","H","C","","Y","a","b","v","g","d","e","z","i","j","k","l","m","n","o","p","r","s","t","u","f","h","c","","y","i","e","g");

		return str_replace($trans1,$trans2,$in);

	}
	static public function slugify($text)
	{
		$text = _Function::retranslit($text);
		// replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		// trim
		$text = trim($text, '-');

		// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

		// lowercase
		$text = strtolower($text);

		if (empty($text)) {
			return 'n-a';
		}

		return $text;
	}
	static public function seo_slug($string){
		$string = str_replace(array('[\', \']'), '', $string);
		$string = preg_replace('/\[.*\]/U', '', $string);
		$string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
		$string = htmlentities($string, ENT_COMPAT, 'utf-8');
		$string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
		$string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
		return strtolower(trim($string, '-'));
	}

	static public function makePass()
    {
        $number = rand(5, 7);
        $arr = array('a','b','c','d','e','f',

            'g','h','i','j','k','l',

            'm','n','o','p','r','s',

            't','u','v','x','y','z',

            'A','B','C','D','E','F',

            'G','H','I','J','K','L',

            'M','N','O','P','R','S',

            'T','U','V','X','Y','Z',

            '1','2','3','4','5','6',

            '7','8','9','0');

        // Генерируем пароль

        $pass = "";

        for($i = 0; $i < $number; $i++)

        {

            // Вычисляем случайный индекс массива

            $index = rand(0, count($arr) - 1);

            $pass .= $arr[$index];

        }

        return $pass;

    }
	


}

?>