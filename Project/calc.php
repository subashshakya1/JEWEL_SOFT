<HTML>
<HEAD>
    <TITLE>Working with Check Boxes</TITLE>
    <SCRIPT>
        function calculate(form, callingField) {
            if (callingField == "result") {
                if(form.square.checked) {
                    form.entry.value = form.result.value - form.result.value;
                }
                else {	form.entry.value = form.result.value-2;	}
            }
            else {
                if(form.square.checked) {
                    form.result.value = form.entry.value + form.entry1.value;
                    /*var x= document.getElementById("val1")+document.getElementById("val2");
                    form.result.value = var x;*/
                }
                else {	form.result.value = form.entry.value + 2;	}
            }
        }
    </SCRIPT>
</HEAD>
<BODY Style="text-align:center;"><FORM><BR/>
    <B>Value:</B>
    <INPUT Name="entry" onChange="calculate(this.form, this.name);" Type="Text" Value="0" id="val1"/>
    <B>Value2:</B>
    <INPUT Name="entry1" onChange="calculate(this.form, this.name);" Type="Text" Value="0" id="val2"/>
    <INPUT Name="square" onClick="calculate(this.form, this.name);" Type="Checkbox" />Square
    <BR/><BR/><B>Result:</B>
    <INPUT onChange="calculate(this.form, this.name);" Name="result" Type="Text" Value="0" />
</FORM></BODY>
</HTML>