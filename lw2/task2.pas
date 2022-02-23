PROGRAM PaulRevere(INPUT, OUTPUT);
USES DOS;
{Печать соответствующего сообщения, зависящего от величины
на входе: '...by land' для 1 и '...by sea' для 2
иначе печать сообщения об ошибке}
VAR
  Lanterns: STRING;
BEGIN {PaulRevere}
  {Read Lanterns}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Lanterns:= '';
  Lanterns:= GetEnv('QUERY_STRING');
  IF Lanterns = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF Lanterns = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('The North Church shows only ', Lanterns, '.')
END. {SarahRevere}
