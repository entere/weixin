<?php
require 'vendor/autoload.php';
use Weixin\OpenPlatform as O;
use Weixin\MpPlatform as M;
echo O\Open::info();
echo M\Mp::info();