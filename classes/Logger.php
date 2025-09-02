<?php

trait Logger {
	public function log(string $msg): void {
		echo '['.date('Y-m-d H:i:s').'] '.$msg."\n";
	}
}
