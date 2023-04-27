var calc = document.calc;
var Currents = 0;
var FlagNewNum = false;
var PendingOp = "";
var res = "";

function NumPressed(Num) {
    if (FlagNewNum) {
        calc.ReadOut.value = Num;
        FlagNewNum = false;
    } else {
        if (calc.ReadOut.value == "0") {
            calc.ReadOut.value = Num;
        } else {
            calc.ReadOut.value += Num;
        }
    }
}

function Operation(Op) {
    var Readout = calc.ReadOut.value;
    if (FlagNewNum && PendingOp != "=") {
        calc.ReadOut.value = Currents;
    } else {
        FlagNewNum = true;
        if ('+' == PendingOp)
            Currents += parseFloat(Readout);
        else if ('-' == PendingOp)
            Currents -= parseFloat(Readout);
        else if ('/' == PendingOp)
            Currents /= parseFloat(Readout);
        else if ('*' == PendingOp)
            Currents *= parseFloat(Readout);
        else
            Currents = parseFloat(Readout);
        calc.ReadOut.value = Currents;
        PendingOp = Op;
    }
}

function Decimal() {
    var curReadOut = calc.ReadOut.value;
    if (FlagNewNum) {
        curReadOut = "0.";
        FlagNewNum = false;
    } else {
        if (curReadOut.indexOf(".") == -1)
            curReadOut += ".";
    }
    calc.ReadOut.value = curReadOut;
}

function ClearOne() {
    calc.ReadOut.value = calc.ReadOut.value.slice(0, -1);
}

function Clear() {
    Currents = 0;
    PendingOp = "";
    calc.ReadOut.value = "0";
    FlagNewNum = true;
}


function Negative() {
    calc.ReadOut.value =
        parseFloat(calc.ReadOut.value) * -1;
}

function Percent() {
    calc.ReadOut.value =
        (parseFloat(calc.ReadOut.value) / 100) *
        parseFloat(Currents);
}