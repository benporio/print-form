<style>
    body {
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .container {
        border: 0px solid red;
    }
    .top-div {
        padding-top: 5px;
    }
    .header-div {
        padding-top: 10px;
    }
    .body-div {
        padding-top: 20px;
    }
    .footer-div.padder {
        margin-top: 10px;
    }
    #formTitle {
        font-size: 3.5em;
        font-weight: bold;
        color: <?= $formModel->colors['color1'] ?>;
    }
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    .body-div table.details {
        text-align: center;
        font-size: 10px;
    }
    .body-div table.details th {
        font-weight: bold;
        border: 0.5px solid black;
        white-space: nowrap;
    }
    .body-div table.details td {
        font-weight: normal;
        border: 0.5px solid black;
    }    
    .footer-div {
        padding-top: 50px;
    }
    .footer-div table {
        padding: 0px 50px;
    }
    .footer-div table tr td {
        text-align: center;
    }
    .line {
        margin: 0px; 
        width: 80%; 
        height: 1px; 
        color: black
    }
</style>