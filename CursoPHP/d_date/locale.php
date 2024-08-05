<?php
//localização para português.
setLocale(LC_ALL, "pt_br", "pt_br.utf8", "portuguese");

//transformando os dias da semana e mês. ucwords (primeira letra em maiúsculo)
echo ucwords(strftime("%A %B"));