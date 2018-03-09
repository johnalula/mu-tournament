<?php
class EthiopianCalendar {
	
	//
	public static function processGrigorian ($_year, $_month, $_day) 
	{
		$_jdOffset = 1723856; 						
		$_today = ( $_jdOffset + 365 )+ 365 * ( $_year - 1 )+ intval( $_year/4 )+ 30 * $_month+ $_day - 31;
		$_gd = cal_from_jd($_today, CAL_GREGORIAN);	
		
		return $_today;
	}
	//
	public static function processEthiopian ( $_year, $_month, $_day )
	{
		$_jdOffset = 1723856;
		$_jdn = cal_to_jd(CAL_GREGORIAN,$_month,$_day,$_year);

		$_r = ( ($_jdn - $_jdOffset) % 1461 ) ;
		$_n = ( $_r % 365 ) + 365 * intval( $_r / 1460 ) ; 
		$_ethiopian = array();
		$_ethiopian['year'] = 4 * intval( ($_jdn - $_jdOffset) / 1461 ) + intval( $_r / 365 )- intval( $_r / 1460 );
		$_ethiopian['month'] = intval( $_n / 30 ) + 1 ;
		$_ethiopian['day'] = ( $_n % 30 ) + 1 ;
		$_ethiopian['date'] = $_ethiopian['month']."/".$_ethiopian['day']."/".$_ethiopian['year'];
		
		return $_ethiopian['date'];
	} 
	//
	public static function processEthiopianDate ( $_date )
	{
		$_year = date('Y', strtotime($_date));
		$_month = date('m', strtotime($_date));
		$_day = date('d', strtotime($_date));
		
		return self::processEthiopian($_year, $_month, $_day);
	} 
	//
	public static function processCurrentDate() 
	{
		$_jdOffset = 1723856;
		$_jdn = cal_to_jd(CAL_GREGORIAN,date('m'),date('d'),date('Y'));

		$_r = ( ($_jdn - $_jdOffset) % 1461 ) ;
		$_n = ( $_r % 365 ) + 365 * intval( $_r / 1460 ) ; 
		$_ethiopian = array();
		$_ethiopian['year'] = 4 * intval( ($_jdn - $_jdOffset) / 1461 ) + intval( $_r / 365 )- intval( $_r / 1460 );
		$_ethiopian['month'] = intval( $_n / 30 ) + 1 ;
		$_ethiopian['day'] = ( $_n % 30 ) + 1 ;
		$_ethiopian['date'] = $_ethiopian['day']."/".$_ethiopian['month']."/".$_ethiopian['year'];
		
		return $_ethiopian['date'];
	}
	//
	public static function processCurrentYear() 
{
		$_jdOffset = 1723856;
		$_jdn = cal_to_jd(CAL_GREGORIAN,date('m'),date('d'),date('Y'));

		$_r = ( ($_jdn - $_jdOffset) % 1461 ) ;
		$_n = ( $_r % 365 ) + 365 * intval( $_r / 1460 ) ; 
		$_year = 4 * intval( ($_jdn - $_jdOffset) / 1461 ) + intval( $_r / 365 )- intval( $_r / 1460 );
		
		return $_year;
	}
	//
	public static function processCurrentMonth () 
	{
			$_jdOffset = 1723856;
			$_jdn = cal_to_jd(CAL_GREGORIAN,date('m'),date('d'),date('Y'));
	
			$_r = ( ($_jdn - $_jdOffset) % 1461 ) ;
			$_n = ( $_r % 365 ) + 365 * intval( $_r / 1460 ) ; 
			$_month = intval( $_n / 30 ) + 1 ;
		return $_month;
	}
	//
	public static function processCurrentDay () 
	{
		$_jdOffset = 1723856;
		$_jdn = cal_to_jd(CAL_GREGORIAN,date('m'),date('d'),date('Y'));

		$_r = ( ($_jdn - $_jdOffset) % 1461 ) ;
		$_n = ( $_r % 365 ) + 365 * intval( $_r / 1460 ) ; 
		$_day = ( $_n % 30 ) + 1 ;
		
		return $_day;
	}
	//
	public static function processCurrentTimestamp () 
	{
		$_timestamp = mktime(date('h'), date('i'), date('s'), self::processCurrentMonth()  , self::processCurrentDay(), self::processCurrentYear());
		
		return $_timestamp;
	}
	//
	public static function prcessTimestamp($_timestamp, $_dformat='d/m/Y') 
	{
		return date($_dformat,$_timestamp );
	}
	//
	public static function processTimestampSetting($_hour, $_minute, $_second, $_date) 
	{
		$_timestamp = mktime($_hour, $_minute, $_second, $_date['month']  , $_date['day'], $_date['year']);
		
		return $_timestamp;
	}
	//
	public static function makeTimestamp($_date) 
	{
		$_timestamp = mktime(date('h'), date('i'), date('s'),  $_date['month']  , $_date['day'], $_date['year']);
		
		return $_timestamp;
	}
	//
	public static function processFromStringToGrigorian($_date) 
	{
		if(strpos($_date,'-'))
			$_date = explode("-",$_date);
		else if(strpos($_date,'/'))
			$_date = explode("/",$_date);
		$_jdOffset = 1723856;
		$_today = ( $_jdOffset + 365 )+ 365 * ( $_date[2] - 1 )+ intval( $_date[2]/4 )+ 30 * $_date[1]+ $_date[0] - 31;
		$_gd = cal_from_jd($_today, CAL_GREGORIAN);	
		
		return $_gd;
	}
	//
	public static function processToTimestamp($_date)
	{
	  $_strDate; 
		if(strpos($_date,'-'))
			$_strDate = explode("-",$_date);
		else if(strpos($_date,'/'))
			$_strDate = explode("/",$_date);
		$_arrDate['day'] = $_strDate[0];
		$_arrDate['month'] = $_strDate[1];
		$_arrDate['year'] = $_strDate[2];		
		$_timestamp = self::makeTimestamp($_arrDate);
		
		return $_timestamp;
	}
	public static $_ALL_YEAR_MONTHS = array ( 1 => "Meskerem", 2 => "Teqimty", 3 => "Hidar", 4 => "Tahsas", 5 => "Tiry", 6 => "Yekatit", 7 => "Megabit", 8 => "Miyazya", 9 => "Gunbet", 10 => "Sene", 11 => "Hamle", 12 => "Nehase");
	
	public static $_ACADEMIC_YEAR_MONTHS = array ( 11 => "Meskerem", 2 => "Teqimty", 3 => "Hidar", 4 => "Tahsas", 5 => "Tiry", 6 => "Yekatit", 7 => "Megabit", 8 => "Miyazya", 9 => "Gunbet", 10 => "Sene");
	
	
	public static function processEthiopianAcademicYears ( ) 
	{
		return self::$_ACADEMIC_YEAR;
	}
	public static function processYearMonthes ( ) 
	{
		return self::$_ALL_YEAR_MONTHS;
	}
	public static function processAcademicYearMonthes ( ) 
	{
		return self::$_ACADEMIC_YEAR_MONTHS;
	}
	public static function processYearMonthID ( $_value ) 
	{
		try {
			foreach( self::$_ALL_YEAR_MONTHS as $_key=> $_month ) {
				if( strcmp($_month, $_value) == 0 ) {
					return $_key; 
				}
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}
	}
	public static function processYearMonthValue ($_id )
	{
		try {
			foreach( self::$_ALL_YEAR_MONTHS as $_key=> $_month ) {
			  if( $_key == $_id ) {
					return $_month; 
				}
			}
			return null;       
		} catch ( Exception $e ) {
			return null; 
		}
	}
	public static function processDefaultYearMonth ( ) 
	{
		return 1;
	}
	public static function processAcademicYearInternationalValue ( $_academicYear ) 
	{
		$_academicYearFirst = intval($_academicYear)+7;
		$_academicYearSecond = intval($_academicYear)+8;
		
		return (trim($_academicYearFirst).'/'.trim($_academicYearSecond));
	}
	public static function processAcademicYearInternationalAlias ( $_academicYear ) 
	{ 
		$_academicYearAlias = self::processAcademicYearInternationalValue ( $_academicYear );
		
		return trim(strtoupper(str_replace('/', '_', $_academicYearAlias))); 
	}
	
	public static function processYearMonthAlias ($_monthID ) 
	{
		switch($_monthID) {			
			case 1:
				return 'Meskerem';
			break;
			case 2:
				return 'Tiqimt';
			break;
			case 3:
				return 'Hidar';
			break;
			case 4:
				return 'Tahsas';
			break;
			case 5:
				return 'Tiry';
			break;
			case 6:
				return 'Yekatit';
			break;
			case 7:
				return 'Megabit';
			break;
			case 8:
				return 'Miyazya';
			break;
			case 9:
				return 'Gunbet';
			break;
			case 10:
				return 'Sene';
			break;
			case 11:
				return 'Hamle';
			break;
			case 12:
				return 'Nehase';
			break;
			 
		}
	} 
} 
