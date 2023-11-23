<?php
class matahati
{
	public function totalPayment($jenis, $total, $member = false)
	{
		$harga = 0;
		if ($jenis == "anak") {
			$harga = 900000;
			if ($total >= 2) {
				$harga = $harga * $total * 0.8;
			}
		} elseif ($jenis == "pria") {
			$harga = 550000;
			if ($member) {
				$harga = $harga * $total * 0.65;
			}
		} elseif ($jenis == "wanita") {
			$harga = 140000;
			if ($total >= 2) {
				$harga1 = 440000;
				$harga2 = 370000;
				$harga = max($harga1, $harga2);
			}
		}
		return $harga;
	}
}
