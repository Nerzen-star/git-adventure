<?php
shell_exec('git clone https://github.com/rok9ru/trpo-core.git -b 1.0 core');
shell_exec('git symbolic-ref --short -q HEAD>version');