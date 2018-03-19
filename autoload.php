<?php
use think\Console;
use Qsnh\PrintVersion;

Console::init(false)->add(new PrintVersion);