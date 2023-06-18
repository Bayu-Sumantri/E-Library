<?php
// Memanggil bagian ISI/CONTENT yang diset di Controller
if($content)
{
	$this->load->view($content);
}