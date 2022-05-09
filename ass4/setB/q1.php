<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h3>SET B</h3>
    <p>
        1) Create a class account(accno,cust_name).
        Derive two classes from account as saving_acc(balance, min_amount)
        and current_acc(balance, min_amount).<br />
        a) Display a menu<br />
        b) Saving Account<br />
        c) Current Account<br />
        For each of this display a menu with the following options.<br />
        1. Create account<br />
        2. Deposit<br />
        3. Withdrawal<br />
    </p>
    <hr />
    <div class="container">
        <div class="row py-3">
            <div class="p-4 col-md-4 form-group" style="border:2px solid green">
                <h4 class="text-center">Select following Options</h4><br>
                <form action="#" method="post">
                    <input type="radio" name="r1" value="1" class=""> Saving Account<br>
                    <input type="radio" name="r1" id="" value="2"> Current Account <br>
                    <input type="submit" value="Submit" name="submit" class="btn btn-outline-primary">
                </form>
            </div>
            <div class="p-4 col-md-4 form-group" style="border:2px solid green">
                <?php
                class account
                {
                    public $accno, $cust_name;
                    function __construct($a, $b)
                    {
                        $this->accno = $a;
                        $this->cust_name = $b;
                    }
                    public function printAcc()
                    {
                        echo "Account number: " . $this->accno . "<br />";
                        echo "Customer name: " . $this->cust_name . "<br />";
                    }
                }
                class saving_acc extends account
                {
                    public $balance, $min_amount;
                    function __construct($a, $b, $c, $d)
                    {
                        parent::__construct($a, $b);
                        $this->balance = $c;
                        $this->min_amount = $d;
                    }
                    public function printDetails()
                    {
                        echo "balance: " . $this->balance . "<br />";
                    }
                    public function deduct_balance($amount)
                    {
                        $this->balance = $this->balance - $amount;
                    }
                    public function add_balance($amount)
                    {
                        $this->balance = $this->balance + $amount;
                    }
                }
                class current_acc extends account
                {
                    public $balance, $min_amount;
                    function __construct($a, $b, $c, $d)
                    {
                        parent::__construct($a, $b);
                        $this->balance = $c;
                        $this->min_amount = $d;
                    }
                    public function printDetails()
                    {
                        echo "balance: " . $this->balance . "<br />";
                    }
                    public function deduct_balance($amount)
                    {
                        $this->balance = $this->balance - $amount;
                    }
                    public function add_balance($amount)
                    {
                        $this->balance = $this->balance + $amount;
                    }
                }
                if (isset($_POST['submit']) || isset($_POST['submit1']) || isset($_POST['submit2'])) {
                    $ch;
                    if (isset($_POST['submit'])) $ch = $_POST['r1'];
                    else if (isset($_POST['submit1'])) $ch = 1;
                    else if (isset($_POST['submit2'])) $ch = 2;
                    if ($ch)
                        echo "<form action=# method=post>";
                    if ($ch == 1) {
                        echo "<input type=radio name=r2 value=1> Create Saving account<br>";
                    } else echo "<input type=radio name=r2 value=1> Create Current account<br>";
                    echo "
                                <input type=radio name=r2 value=2> Deposit <br>
                                <input type=radio name=r2 value=3> Withdrawal <br>
                                <input type=submit  value=Submit name=submit$ch class=\"btn btn-outline-primary\">
                            </form>
                            ";
                }
                ?>
            </div>
            <div class="p-4 col-md-4 form-group" style="border:2px solid green">
                <?php
                if (isset($_POST['submit1'])) {
                    $ch2 = $_POST['r2'];
                    $a = new saving_acc(54, "shoeb", 54824, 500);
                    switch ($ch2) {
                        case 1:
                            echo "Account created<br/>";
                            $a->printAcc();
                            $a->printDetails();
                            break;
                        case 2:
                            $a->printDetails();
                            $a->add_balance(500);
                            echo "500 Deposited<br/>";
                            $a->printDetails();
                            break;
                        case 3:
                            $a->printDetails();
                            $a->deduct_balance(500);
                            echo "500 Withdrawn<br/>";
                            $a->printDetails();
                    }
                }
                if (isset($_POST['submit2'])) {
                    $ch2 = $_POST['r2'];
                    $a = new current_acc(54, "shoeb", 54824, 500);
                    switch ($ch2) {
                        case 1:
                            echo "Account created<br/>";
                            $a->printAcc();
                            $a->printDetails();
                            break;
                        case 2:
                            $a->printDetails();
                            $a->add_balance(500);
                            echo "500 Deposited<br/>";
                            $a->printDetails();
                            break;
                        case 3:
                            $a->printDetails();
                            $a->deduct_balance(500);
                            echo "500 Withdrawn<br/>";
                            $a->printDetails();
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>