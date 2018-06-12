<?php

class CalendarCore {

	private $_useDate;
	private $_m;
	private $_y;
	private $_startMonth;
	private $_endMonth;
	private $_startYear;
	private $_endYear;
	private $_daysInStartMonth;
	private $_daysInEndMonth;
	private $_daysInMonth;
	private $_startFirstDate;
	private $_endLastDate;
	private $_startDay;
	private $_startDate;
	private $_endDate;
	
	public function __construct ( $_useDate = NULL, $_startingDate = NULL, $_endingDate = NULL ) 
	{
		if(isset($_useDate) )	{
			$this->_useDate = $_useDate;
		} else {
			$this->_useDate = date('d-m-Y H:i:s');
		}
		if(isset($_startingDate) )	{
			$this->_startDate = $_startingDate;
			$this->_startMonth = date('m', strtotime($_startingDate));
			$this->_startYear = date('Y', strtotime($_startingDate));
			$this->_startFirstDate = date('d', strtotime($_startingDate));
			//$this->_startDayInStartingDate = $_startingDate;
		} 
		if(isset($_endingDate) )	{
			$this->_endDate = $_endingDate;
			$this->_endMonth = date('m', strtotime($_endingDate));
			$this->_endYear = date('Y', strtotime($_endingDate));
			$this->_endLastDate = date('d', strtotime($_endingDate));;
			//$this->_startDayInEndingDate = $_endingDate;
		} 
		$ts = strtotime($this->_useDate);
		$this->_m = date('m', $ts);
		$this->_y = date('Y', $ts);
		
		$this->_daysInMonth = cal_days_in_month(CAL_GREGORIAN,$this->_m,$this->_y); 
		$_ts = mktime(0, 0, 0, $this->_m, 1, $this->_y);
		$this->_startDay = date('w', $_ts);
	
	}
	private function _createEventObj() 
	{
		
	}
	public function buildCalendar()
	{	
		$cal_month = date('F Y', strtotime($this->_useDate));
		$weekdays = array('Sun', 'Mon', 'Tue','Wed', 'Thu', 'Fri', 'Sat'); 
		
		$html = "\n\t<h2>$cal_month</h2>";
	
		for ( $d=0, $labels=NULL; $d<7; ++$d )	{
			$labels .= "\n\t\t<li>" . $weekdays[$d] . "</li>";
		}
		$html .= "\n\t<ul class=\"weekdays\">". $labels . "\n\t</ul>"; 
		
		$events = $this->_createEventObj(); 
		
		$html .= "\n\t<ul>";  
		for ( $i=1, $c=1, $t=date('j'), $m=date('m'), $y=date('Y');	$c<=$this->_daysInMonth; ++$i ) { 
			$class = $i<=$this->_startDay ? "fill" : NULL; 
			if ( $c+1==$t && $m==$this->_m && $y==$this->_y ) {
				$class = "today";
			} 
			
			$ls = sprintf("\n\t\t<li class=\"%s\">", $class);
			$le = "\n\t\t</li>"; 
		
			if ( $this->_startDay<$i && $this->_daysInMonth>=$c) { 
				$event_info = NULL; 
				if ( isset($events[$c]) )	{
					foreach ( $events[$c] as $event ) {
						$link = '<a href="view.php?event_id='.$event->id.'">'.$event->title.'</a>';
						$event_info .= "\n\t\t\t$link";
					}
				}
				$date = sprintf("\n\t\t\t<strong>%02d</strong>",$c++);
			} else { $date="&nbsp;"; }

			$wrap = $i!=0 && $i%7==0 ? "\n\t</ul>\n\t<ul>" : NULL;
			
			$html .= $ls . $date . $event_info . $le . $wrap;
		} 
	
		while ( $i%7!=1 ) {
			$html .= "\n\t\t<li class=\"fill\">&nbsp;</li>";
			++$i;
		} 
		
		$html .= "<div class='clearFix'></div>"; 
		$html .= "\n\t</ul>\n\n"; 
		
		return $html;
	}
	public function renderSchoolCalendar($_imagePath, $_canManage)
	{	
		$_calendarMonth = date('F Y', strtotime($this->_useDate));
		$_calendarWeekdays = array('Sun', 'Mon', 'Tue','Wed', 'Thu', 'Fri', 'Sat'); 
		
		$_html = "<table class=\"ui-calendar-table\">\n\t\t\t\t\t<thead>";
		$_html .= "\n\t\t\t\t\t\t<tr class=\"ui-calendar-table-main-header\">\n\t\t\t\t\t\t\t<th colspan=7 >$_calendarMonth</th>\n\t\t\t\t\t\t</tr>";
		$_html .= "\n\t\t\t\t\t\t<tr class=\"ui-calendar-table-header\">";
	
		for ( $_d=0, $_labels=NULL; $_d<7; ++$_d )	{
			$_labels .= "\n\t\t\t\t\t\t\t<th class=\"ui-calander-th-sm-1\">" . $_calendarWeekdays[$_d] . "</th>";
		}
		$_html .= $_labels."\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</thead>"; 
		
		//$_events = $this->_createEventObj(); 
		
		$_html .= "\n\t\t\t\t\t<tbody>";  
		
		$_calendars = $this->renderCalendarArray ();
		$_class = NULL;
		$_weekClass = NULL;
		$_limitNum = count($_calendars);
		for($_i = 0,$_td=date('j'), $_mnth=date('m'), $_yr=date('Y'); $_i < $_limitNum; $_i++) {
			$_html .= "\n\t\t\t\t\t\t<tr>";  
			for($_j=0; $_j < 7; $_j++) { 
				$_currDate = $this->_m.'/'.$_calendars[$_i][$_j].'/'.$this->_y;
				if( $_j == 0 || $_j == 6 ) {
					$_weekClass = "ui-current-week-days";
				} else {
					$_weekClass = NULL;
				}
				if ( $_td == $_calendars[$_i][$_j] && $_mnth == $this->_m && $_yr == $this->_y ) {
					$_class = "ui-current-today-date";
				} else {
					$_class = NULL;
				}
				$_class = $_class.' '.$_weekClass;
				$_stratTD = sprintf("\n\t\t\t\t\t\t\t<td class=\"ui-calander-td-sm-1 %s\">", $_class); 
				if($_calendars[$_i][$_j] != NULL) {
					$_startDiv = "\n\t\t\t\t\t\t\t\t<div class=\"ui-calendar-left-text\">\n\t\t\t\t\t\t\t\t\t<span class=\"ui-left-text\">";
					$_tdata = sprintf("<strong>%02d</strong>", $_calendars[$_i][$_j]);
					$_endDivSpan = "</span>\n\t\t\t\t\t\t\t\t\t<span class=\"ui-right-text\">";
					if($_canManage) {
						$_actionInput = "<input type=\"checkbox\" class=\"ui-calendar-input-box\" rel=\"".$_calendars[$_i][$_j]."\">";
					} else { $_actionInput = NULL; }
					$_endActionDiv = "</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"ui-clear-fix\"></div>\n\t\t\t\t\t\t\t\t<div class=\"ui-calendar-right-text\">";
					if($_canManage) {
						$_buttonDiv = "\n\t\t\t\t\t\t\t\t\t<button data-toggle=\"modal\" data-target=\"#schoolCalendarModal\" class=\"ui-calendar-img createCalenderEventButton\" rel=\"".$_calendars[$_i][$_j]."\" onclick='Javascript:copyCalenderValue(\"".$_currDate."\")'; value=\"".$_currDate." \">";
					$_imageDiv =  "\n\t\t\t\t\t\t\t\t\t\t<img class=\"ui-calendar-img-sm\" src=\"$_imagePath\">\n\t\t\t\t\t\t\t\t\t</button>"; 
					} else { $_buttonDiv = NULL; }
					$_imageDiv .="\n\t\t\t\t\t\t\t\t</div>";
					$_tableData = $_startDiv.$_tdata.$_endDivSpan.$_actionInput.$_endActionDiv.$_buttonDiv.$_imageDiv;
				} else {
					$_tableData = NULL;
				}
				
				$_endTD = "\n\t\t\t\t\t\t\t</td>";
				$_html .= $_stratTD.$_tableData.$_endTD;
			}
			$_html .=  "\n\t\t\t\t\t\t</tr>";
		} 
		 
		$_html .= "\n\t\t\t\t\t<div class='clearFix'></div>"; 
		$_html .= "\n\t\t\t\t\t</tbody>"; 
		$_html .= "\n\t\t\t\t\t<tfoot>\n\t\t\t\t\t\t<tr class=\"ui-calendar-table-main-footer\">\n\t\t\t\t\t\t\t<td colspan=7 >&nbsp</td>\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</tfoot></table>";
		
		return $_html;
	}
	public function renderCalendarArray ()
	{
		$_strDate = '';
		$_weekDayRow = intval(date('w', strtotime($this->_useDate)));
		$_totalRows = (($_weekDayRow+$this->_daysInMonth) > 35 ) ? 6:5;
		$_calendarArrays = array();
		for($_i = 0, $_d=1; $_i < $_totalRows; $_i++) {
			for($_j=0; $_j < 7; $_j++) {
				$_strDate = ($this->_m.'/'.$_d.'/'.$this->_y);
				$_wd = intval(date('w', strtotime($_strDate)));
				if($_wd == $_j && $_d <= $this->_daysInMonth) {
					$_calendarArrays[$_i][$_j] = $_d;
					$_d++;
				} else {
					$_calendarArrays[$_i][$_j] = NULL;
				}
			}
		}
		
		return $_calendarArrays;
	}
	public function executeCalendarArray()
	{	
		$_calendarArray = array();
		$_monthLength = $this->calculateMonthDiff(); 
		$_monthNum = $this->executeTotalMonths ($this->_startYear); 
		$_endingDate = strtotime(date('m/d/Y', strtotime($this->_endDate)));
		$_finalDate = strtotime(date('m/d/Y', strtotime($this->_endDate)));
		
		for($_yr=$this->_startYear,$_mth=$this->_startMonth; $_yr <= $this->_endYear; $_yr++) {
			$_thisYearMonths = $this->executeTotalMonths ($_yr);
			$_startingMonth = ($this->_startMonth == $_mth && $this->_startYear == $_yr ) ? $this->_startMonth:1;
			for($_i=1,$_m=$_startingMonth; $_i <= $_thisYearMonths; $_i++,$_m++) {
				$_thisMonthStr = $_m.'/1/'.$_yr;
				$_startingDay = ($this->_startMonth == $_m && $this->_startYear == $_yr ) ? $this->_startFirstDate:1;
				$_thisMonthDays = $this->executeTotalMonthDays($_thisMonthStr);
				for($_j = $_startingDay; $_j <= $_thisMonthDays; $_j++) {
					$_dateArray = $_m.'/'.$_j.'/'.$_yr;
					$_weekDay = strtoupper(date('D', strtotime($_dateArray)));
					if(($_weekDay != "SAT") && ($_weekDay != "SUN")) {
						$_calendarArray[] = date('m/d/Y', strtotime($_dateArray));
					}
				}
			}
		}
		 
		return $_calendarArray;
	}
	public function executeTotalMonths ($_thisYear) 
	{
		$_totalMonths = 0;
		if(isset($_thisYear) && ($this->_startYear <= $_thisYear) && ($_thisYear <= $this->_endYear) ) {
			if($this->_startYear == $_thisYear) {
				$_totalMonths = (12-($this->_startMonth))+1;
			} elseif($this->_endYear == $_thisYear ) {
				$_totalMonths = ($this->_endMonth);
			} else {
				$_totalMonths = 12;
			}
		}
		return intval($_totalMonths);
	}
	public function executeTotalMonthDays ($_dateStr) 
	{
		$_totalDays = 0;
		if(isset($_dateStr) && ($this->_startYear <= $this->executeYear($_dateStr)) && ($this->executeYear($_dateStr) <= $this->_endYear) ) {
			if($this->_endMonth == $this->executeMonth($_dateStr)) {
				$_totalDays = $this->_endLastDate;
			} else {
				$_totalDays = date('t', strtotime(trim($_dateStr)));
			}
		}
		return intval($_totalDays);
	}
	/*public function buildCalendarArray()
	{	
		$_calendarArray = array();
		$_monthLength = $this->calculateMonthDiff(); 
		$_endingDate = strtotime(date('m/d/Y', strtotime($this->_endDate)));
		$_finalDate = strtotime(date('m/d/Y', strtotime($this->_endDate)));
		
		for($_yr=$this->_startYear; $_yr <= $this->_endYear; $_yr++) {
			$_yearStartMonth = $this->calculateYearStartMonth($_yr);
			for($_i=1,$_m=$this->_startMonth,$_y=$this->_startYear; $_i <= $_monthLength; $_i++,$_m++) {
				$_monthStr = $_m.'/1/'.$_y;
				//$_y = $_yr;
				$_sDate = ($this->_startMonth == $_m && $this->_startYear == $_y ) ? $this->_startFirstDate:1;
				$_totalDaysInMonth = ($_m == $this->_endMonth && $_y = $this->_endYear) ? $this->_endLastDate:$this->calculateTotolDaysInMonth($_monthStr);
				if(($_y <= $this->_endYear )) {
					for($_j = $_sDate; $_j <= $_totalDaysInMonth; $_j++) {
						$_dateArray = $_m.'/'.$_j.'/'.$_y;
						$_weekDay = strtoupper(date('D', strtotime($_dateArray)));
						if(($_weekDay != "SAT") && ($_weekDay != "SUN")) {
							$_calendarArray[] = date('D m/d/Y', strtotime($_dateArray));
						}
					}
					$_finalDate = strtotime(date('m/d/Y', strtotime($_dateArray)));
				}
				if($_m >= 12 && $_y <= $this->_endYear ) {
					$_m = 0;
					//if($_m == 1) {
						++$_y;
					//}
				}
			}
		}
		 
		return $_calendarArray;
	}*/
	public function calculateDateWeek ($_date) 
	{
		$_dateNum = date('d', strtotime($_date)); 
		$_weekValue = 0;
		if($_dateNum <= 6) {
			$_weekValue = 1;
		} elseif ($_dateNum >=7 && $_dateNum <= 13 ) {
			$_weekValue = 2;
		} elseif ($_dateNum >=14 && $_dateNum <= 20 ) {
			$_weekValue = 3;
		} elseif ($_dateNum >= 21 && $_dateNum <=27 ) {
			$_weekValue = 4;
		} elseif ($_dateNum >=28 && $_dateNum <=31 ) {
			$_weekValue = 5;
		} 
		return $_weekValue;
	}

	public function executeMonth ($_dateStr)
	{
		return date('m', strtotime($_dateStr));;
	}
	public function executeYear ($_dateStr)
	{
		return date('Y', strtotime($_dateStr));;
	}
	public function calculateDayDifference()
	{
		$_startingDate = strtotime(date('m/d/Y', strtotime($this->_startDate)));
		$_endingDate = strtotime(date('m/d/Y', strtotime($this->_endDate)));

		return round(round(abs(($_endingDate)-($_startingDate))/86400));
	}
	public function calculateMonthDiff()
	{
		$_monthNum = 0;
		$_startingDate = strtotime(date('m/d/Y', strtotime($this->_startDate)));
		$_endingDate = strtotime(date('m/d/Y', strtotime($this->_endDate)));
		$_yearDiff = $this->calculateYearDifference();
		;
		if($_yearDiff == 0 ) {
			$_monthNum = ((max($this->_startMonth, $this->_endMonth))-(min($this->_startMonth, $this->_endMonth)))+1;
		} elseif($_yearDiff == 1) {
			$_monthNum = (((12-$this->_startMonth)+1)+($this->_endMonth));
		} else {
			$_monthNum = ((12*($_yearDiff-1))+(((12-$this->_startMonth)+1)+($this->_endMonth)));
		}
		return $_monthNum;
	}
	public function calculateYearDifference()
	{
		return ($this->_endYear)-($this->_startYear);
	}
	public function calculateYearDiff()
	{
		$_startingDate = strtotime(date('m/d/Y', strtotime($this->_startDate)));
		$_endingDate = strtotime(date('m/d/Y', strtotime($this->_endDate)));

		return round(round(abs(($_endingDate)-($_startingDate))/86400)/365);
	}
	public static function processDate($_date)
	{
		$_startingMonth = date('m', strtotime($this->_startDate));
		$_endingMonth = date('m', strtotime($this->_endDate));
		$_startingYear = date('Y', strtotime($this->_startDate));
		$_endingYear = date('Y', strtotime($this->_endDate));
		$_now = time();
		$_diff = abs(($_endingDate)-($_startingDate));
		$_years = round(round(abs(($_endingDate)-($_startingDate))/(86400*365)));
		//return floor((($_diff - ($_years*365*86400))/(365*86400))/12);
		return floor(($_diff-($_years*86400*365))/($_years*86400)/12);
		//return ((($_endingYear-$_startingYear)*12)+($_endingMonth-$_startingMonth));
		//return floor(($_now-$_endingDate)/86400);
	}
	public function processStartWeek()
	{
		return date('w', strtotime($this->_endDate));
	}
	public function processStartFirstDate()
	{
		return $this->_startFirstDate;
	}
	public function processEndLastDate()
	{
		return $this->_endLastDate;
	}
	public static function calculateYearStartMonth($_year)
	{
		$_yearMont = 1;
		return $_yearMonth;
	}
	public static function processMonth($_date)
	{
	}
	public static function processYear($_date)
	{
	}
	public function calculateTotolDaysInMonth ( $_date )
	{
		return date('t', strtotime(trim($_date)));
	}
	public static function processDay ( $_date )
	{
		return date('l', strtotime(trim($_date)));
	}
	public static function processEthiopian ( $_date )
	{
		$_dayValue = date('d', strtotime($_date));
		$_monthValue = date('m', strtotime($_date));
		$_yearValue = date('Y', strtotime($_date));
		
		return  EthiopianCalendar::processEthiopian($_yearValue, $_monthValue, $_dayValue);
	}
	public static function processGrigorian ( $_date )
	{
		$_dayValue = date('d', strtotime($_date));
		$_monthValue = date('m', strtotime($_date));
		$_yearValue = date('Y', strtotime($_date));
		
		return  EthiopianCalendar::processGrigorian($_yearValue, $_monthValue, $_dayValue);
	}
	public static function makeEthiopianCalendar ( $_date )
	{
		echo ' ==> '.$_etDate.' <== <br>';
		for($_m = 1; $_m <= 5; $_m++) {
			$_yearVal =  $_m.'/1/2016';
			//$_numDays = CalendarCore::calculateTotolMonthDays ($_yearVal);
			for($_i = 1; $_i <= 10; $_i++) {
				$_dateVal = $_m.'/'.$_i.'/2016';
				$_dateValue = EthiopianCalendar::processEthiopian(2016, 3, 16);;
				$_dayName = strtoupper(date('l', strtotime($_dateVal)));
				if($_dayName == 'MONDAY' || $_dayName == 'TUESDAY' || $_dayName == 'WEDNESDAY' || $_dayName == 'THURSDAY' || $_dayName == 'FRIDAY') {
					echo date('l', strtotime($_dateValue)).' => '.date('m/d/Y', strtotime($_dateValue)).' --- <br>';
				}
			}
			echo '<br>****** === ***** <br>';
		}
	}
	public static function makeEthiopian ( $_fromDate, $_toDate )
	{
		$_arrayValue = array();
		$_startDay = date('d', strtotime($_fromDate));
		$_startMonth = date('m', strtotime($_fromDate));
		$_endMonth = date('m', strtotime($_toDate));
		$_monthValue = date('m', strtotime($_date));
		$_startYearValue = date('Y', strtotime($_fromDate));
		
		for($_m = $_startMonth; $_m <= $_endMonth; $_m++) { 
			for($_i = 1; $_i <= 30; $_i++) {
				if($_dayName == 'MONDAY' || $_dayName == 'TUESDAY' || $_dayName == 'WEDNESDAY' || $_dayName == 'THURSDAY' || $_dayName == 'FRIDAY') {
					$_arrayValue[] = $_i;
				}
			}
			echo '<br>****** === ***** <br>';
		}
	}
	public function makeDateDifference($_startDate, $_endDate)
	{
		$_startingDate = strtotime(date('m/d/Y', strtotime($_startDate)));
		$_endingDate = strtotime(date('m/d/Y', strtotime($_endDate)));

		return round(round(abs(($_endingDate)-($_startingDate))/86400));
	}
	public static function processDateFormat ($_date) 
	{ 
		return date('m/d/Y', strtotime($_date));
	}
	public static function processYearBeginingDate ($_date) 
	{
		$_year = date('Y', strtotime($_date));
		$_startDate = '1/1/'.$_year;
				 
		return date('m/d/Y', strtotime($_startDate));
	}
	public static function processYearEndingDate ($_date) 
	{
		$_year = date('Y', strtotime($_date));
		$_endDate = '12/31/'.$_year;
				 
		return date('m/d/Y', strtotime($_endDate));
	}
	public static function processMonthBeginingDate ($_date) 
	{
		$_year = date('Y', strtotime($_date));
		$_month = date('m', strtotime($_date));
		$_startDate = $_month.'/1/'.$_year;
				 
		return date('m/d/Y', strtotime($_startDate));
	}
	public static function processMonthEndingDate ($_date) 
	{
		$_year = date('Y', strtotime($_date));
		$_month = date('m', strtotime($_date));
		$_days = date('t', strtotime($_date));
		$_endDate = $_month.'/'.$_days.'/'.$_year;
				 
		return date('m/d/Y', strtotime($_endDate));
	}
	
	 
}

