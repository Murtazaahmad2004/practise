<?php
include "sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
   body {
    font-family: Arial, sans-serif;
}

.container {
    width: 100%;
    display: flex;
    justify-content: center;
}

.slip {
    border: 1px solid black;
    width: 800px;
    padding: 5px;
}

.header {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid black;
}

.header .left, .header .right {
    width: 45%;
}

.title h4 {
    width: 45%;
    text-align: center;
}

.bank-info {
    display: flex;
    justify-content: space-between;
    padding: 5px;
}

.bank-info .left, .bank-info .right {
    width: 45%;
}

.bank-info .note {
    font-size: 10px;
    color: red;
}

.details {
    display: flex;
    justify-content: space-between;
    padding: 5px;
    border-bottom: 1px solid black;
}

.details .left, .details .right {
    width: 45%;
}

.signature {
    display: flex;
    justify-content: space-between;
    padding: 5px;
}

.signature .left, .signature .right {
    width: 45%;
}
.form-group{
    margin-left: 73%;
}
</style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Slip</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="slip">
            <div class="header">
                <div class="left">
                    <h4>STUDENT'S COPY</h4>
                    <p>Hamdard University</p>
                    <p>Branch Code___________ Date:__________</p>
                    <p>Branch Name__________</p>
                </div>
                <div class="right">
                    <h4>ACCOUNT COPY</h4>
                    <p>Hamdard University</p>
                    <p>Branch Code__________ Date:__________</p>
                    <p>Branch Name__________</p>
                </div>
            </div>
            <div class="bank-info">
                <div class="left">
                    <p>HABIB BANK LTD.</p>
                    <p>Account Title: School Fee Dues Account</p>
                    <p>Account No. 0042-12345678-03</p>
                </div>
                <div class="right">
                    <p>HABIB BANK LTD.</p>
                    <p>Account Title: School Fee Dues Account</p>
                    <p>Account No. 0042-12345678-03</p>
                </div>
            </div>
            <div class="details">
                <div class="left">
                    <p>Challan #</p>
                    <p>Applicant's Name</p>
                    <p>Father's Name</p>
                    <p>CNIC No.</p>
                    <p>Total:</p>
                </div>
                <div class="right">
                    <p>1000186376</p>
                    <p>MURTAZA AHMAD</p>
                    <p>TAHIR MEHMOOD</p>
                    <p>3730181884439</p>
                    <p>RS 65800</p>
                </div>
            </div>
            <div class="signature">
                <div class="left">
                    <p>Applicant’s Sig.</p>
                    <p>Cashier</p>
                    <p>Officer</p>
                </div>
                <div class="right">
                    <p>Applicant’s Sig.</p>
                    <p>Cashier</p>
                    <p>Officer</p>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="button" value="Print" class="btn btn-primary"/>
    </div>
</body>
</html>