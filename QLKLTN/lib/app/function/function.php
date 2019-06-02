<?php
function diemtk($sinhvien)
{
	$result=$sinhvien->laydiem->diem1*($sinhvien->laydiem->ts1/100)+$sinhvien->laydiem->diem2*($sinhvien->laydiem->ts2/100)+$sinhvien->laydiem->diem3*($sinhvien->laydiem->ts3/100)+$sinhvien->laydiem->diem4*($sinhvien->laydiem->ts4/100);
	return $result;
}
// function formatNS($ngaysinh){
// 	$result = $ngaysinh->thanhvien->ngaysinh->format('d-m-Y');
// 	return $result;
// }

function diemdanhgia($diem){
	$result = $diem[0]*0.4 + $diem[1]*0.3 + $diem[2]*0.3;
	return $result;
}

function detai($value){
	$truncated = str_limit($value, 10);
	return $truncated;
}

function convert_number_to_words( $number )
{
	$hyphen = ' ';
	$conjunction = '  ';
	$separator = ' ';
	$negative = 'âm ';
	$decimal = ' phẩy ';
	$dictionary = array(
		0 => 'Không',
		1 => 'Một',
		2 => 'Hai',
		3 => 'Ba',
		4 => 'Bốn',
		5 => 'Năm',
		6 => 'Sáu',
		7 => 'Bảy',
		8 => 'Tám',
		9 => 'Chín',
		10 => 'Mười',
		11 => 'Mười một',
		12 => 'Mười hai',
		13 => 'Mười ba',
		14 => 'Mười bốn',
		15 => 'Mười năm',
		16 => 'Mười sáu',
		17 => 'Mười bảy',
		18 => 'Mười tám',
		19 => 'Mười chín',
		20 => 'Hai mươi',
		30 => 'Ba mươi',
		40 => 'Bốn mươi',
		50 => 'Năm mươi',
		60 => 'Sáu mươi',
		70 => 'Bảy mươi',
		80 => 'Tám mươi',
		90 => 'Chín mươi',
		100 => 'trăm',
		1000 => 'ngàn',
		1000000 => 'triệu',
		1000000000 => 'tỷ',
		1000000000000 => 'nghìn tỷ',
		1000000000000000 => 'ngàn triệu triệu',
		1000000000000000000 => 'tỷ tỷ'
	);

	if( !is_numeric( $number ) )
	{
		return false;
	}

	if( ($number >= 0 && (int)$number < 0) || (int)$number < 0 - PHP_INT_MAX )
	{
		// overflow
		trigger_error( 'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX, E_USER_WARNING );
		return false;
	}

	if( $number < 0 )
	{
		return $negative . convert_number_to_words( abs( $number ) );
	}

	$string = $fraction = null;

	if( strpos( $number, '.' ) !== false )
	{
		list( $number, $fraction ) = explode( '.', $number );
	}

	switch (true)
	{
		case $number < 21:
		$string = $dictionary[$number];
		break;
		case $number < 100:
		$tens = ((int)($number / 10)) * 10;
		$units = $number % 10;
		$string = $dictionary[$tens];
		if( $units )
		{
			$string .= $hyphen . $dictionary[$units];
		}
		break;
		case $number < 1000:
		$hundreds = $number / 100;
		$remainder = $number % 100;
		$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
		if( $remainder )
		{
			$string .= $conjunction . convert_number_to_words( $remainder );
		}
		break;
		default:
		$baseUnit = pow( 1000, floor( log( $number, 1000 ) ) );
		$numBaseUnits = (int)($number / $baseUnit);
		$remainder = $number % $baseUnit;
		$string = convert_number_to_words( $numBaseUnits ) . ' ' . $dictionary[$baseUnit];
		if( $remainder )
		{
			$string .= $remainder < 100 ? $conjunction : $separator;
			$string .= convert_number_to_words( $remainder );
		}
		break;
	}

	if( null !== $fraction && is_numeric( $fraction ) )
	{
		$string .= $decimal;
		$words = array( );
		foreach( str_split((string) $fraction) as $number )
		{
			$words[] = $dictionary[$number];
		}
		$string .= implode( ' ', $words );
	}

	return $string;
}

?>