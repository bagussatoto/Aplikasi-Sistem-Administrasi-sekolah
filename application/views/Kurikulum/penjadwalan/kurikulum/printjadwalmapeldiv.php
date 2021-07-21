<!DOCTYPE html>
<html>
<head>
<title>CSS Table Div</title>
<style>
html,body{font:14px arial,verdana,san-serif;}
.container{
    display:table;
    width:400px;
    border-collapse:collapse;
    margin:0 auto;
    line-height:25px;
}
.table-row:hover{background-color:#ffffff;}
.heading{
    font-weight:bold;
    display:table-row;
    background-color:#C91622;
    text-align:center;
    line-height:35px;
    color:#ffffff;
}
.table-row{  
    display:table-row;
    text-align:center;
}
.strip{  
    display:table-row;
    text-align:center;
    background-color:#f0f0f0;
}
.col{ 
    display:table-cell;
    border:1px solid #CCC;
}
</style>
</head>
<body>
<h1>Membuat Table dengan CSS dan tag DIV</h1>
<hr/><br/>
<div class="container">
    <div class="heading">
        <div class="col">Jam Ke-</div>
        <div class="col">Waktu</div>
        <div class="col">Senin</div>
    </div>
    <div class="table-row strip">
        <div class="col">0</div>
        <div class="col">IE</div>
    </div>
    <div class="table-row strip">
        <div class="col">1</div>
        <div class="col">Firefox</div>
    </div>
    <div class="table-row strip">
        <div class="col">2</div>
        <div class="col">Chrome</div>
    </div>
    <div class="table-row strip">
        <div class="col">3</div>
        <div class="col">Opera</div>
    </div>
    <div class="table-row strip">
        <div class="col">4</div>
        <div class="col">Safari</div>
    </div>
    <div class="table-row strip">
        <div class="col">5</div>
        <div class="col">Safari</div>
    </div>
    <div class="table-row strip">
        <div class="col">6</div>
        <div class="col">Safari</div>
    </div>
    <div class="table-row strip">
        <div class="col">7</div>
        <div class="col">Safari</div>
    </div>
    <div class="table-row strip">
        <div class="col">8</div>
        <div class="col">Safari</div>
    </div>
</div>
</body>
</html>