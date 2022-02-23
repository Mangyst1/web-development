PROGRAM PrintHello(INPUT, OUTPUT);
USES DOS;
VAR
  Nme, Pre, Doit: STRING;
  Lenf: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Nme:= '';
  Nme:= GetEnv('QUERY_STRING');
  Doit:= Copy(Nme,1,4);
  IF Doit = 'name'
  THEN
    BEGIN
      Pre:= '=';
      Lenf:= Pos(Pre, Nme);
      DELETE(Nme, 1, Lenf);
      WRITELN('Hello dear, ', Nme, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!')
END.