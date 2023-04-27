<style>
    @import url("assets/main.css");
</style>
<body>
<div class="body">
    <form class="form" name="calc" action="">
        <input id="editWide" name="ReadOut" type="Text"
               value="0"/>
        <div class="numbers">
            <input class="operation" name="btnClear" type="Button"
                   value="AC" onclick="Clear()"/>
            <input class="operation" name="btnNeg" type="button"
                   value="+/-" onclick="Negative()"/>
            <input class="operation" name="btnPercent" type="Button"
                   value="%" onclick="Percent()"/>
            <input id="icon" class="operation_orange" name="btnClearEntry" type="Button"
                   value="" onclick="ClearOne()"/>


            <input class="number" name="btnSeven" type="Button"
                   value="7" onclick="NumPressed(7)">
            <input class="number" name="btnEight" type="Button"
                   value="8" onclick="NumPressed(8)">
            <input class="number" name="btnNine" type="Button"
                   value="9" onclick="NumPressed(9)">
            <input class="operation_orange" name="btnDivide" type="Button"
                   value=" / " onclick="Operation('/')"/>

            <input class="number" name="btnFour" type="Button"
                   value="4" onclick="NumPressed(4)">
            <input class="number" name="btnFive" type="Button"
                   value="5" onclick="NumPressed(5)">
            <input class="number" name="btnSix" type="Button"
                   value="6" onclick="NumPressed(6)">
            <input class="operation_orange" name="btnMultiply" type="Button"
                   value="×" onclick="Operation('*')"/>


            <input class="number" name="btnOne" type="Button"
                   value="1" onclick="NumPressed(1)">
            <input class="number" name="btnTwo" type="Button"
                   value="2" onclick="NumPressed(2)">
            <input class="number" name="btnThree" type="Button"
                   value="3" onclick="NumPressed(3)">
            <input class="operation_orange" name="btnMinus" type="Button"
                   value="-" onclick="Operation('-')"/>


            <input id="decimal" class="operation" name="btnDecimal" type="Button"
                   value="," onclick="Decimal()">
            <input class="number" name="btnZero" type="Button"
                   value="0" onclick="NumPressed(0)">
            <input class="operation" id="wide" name="btnEquals"
                   type="Button" value="=" onclick="Operation('=')">
            <input class="operation_orange" name="btnPlus" type="Button"
                   value="+" onclick="Operation('+')"/>
        </div>
    </form>
</div>
<script src="/assets/main.js"></script>
</body>