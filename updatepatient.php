<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gusi-Famaran Dental System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
        }
        .sidebar {
            background-color: #f3f3f3;
            width: 20%;
            padding: 10px;
            height: 100vh;
        }
        .sidebar button {
            display: block;
            width: 100%;
            height: 10%;
            margin-bottom: 10px;
            padding: 10px;
            border: none;
            background-color: #ffffff;
            text-align: center;
            cursor: pointer;
            font-size: 20px;
            border: 2px solid black;
            border-radius: 5px;
            
        }
        .sidebar button:hover {
            background-color: #f5dc84;
        }
        .main {
            width: 80%;
            padding: 20px;
        }
        h1 {
            color: black;
            font-family: "Times New Roman", Times, serif;
        }
        .form-container {
            background-color: #fff;
            border: 5px solid #f5dc84;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container label {
            display: block;
            margin: 10px 0 5px;
        }
        .form-container input,
        .form-container select {
            width: 30%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border-radius: 25px;
        }
        .form-footer {
            display: flex;
            justify-content: space-between;
        }
        .form-footer button {
            padding: 10px 20px;
            border: none;
            background-color: #f5dc84;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-footer button:hover {
            background-color: #e5cb74;
        }
                
        .form-inline {  
        display: flex;
        flex-flow: row wrap;
        align-items: center;
        }

        .form-inline label {
        margin: 5px 10px 5px 0;
        }

        .form-inline input {
        vertical-align: middle;
        margin: 5px 10px 5px 0;
        padding: 10px;
        background-color: #fff;
        border: 1px solid #ddd;
        }
        fieldset{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <button>Home</button>
            <button>Add New Patient</button>
            <button>Appointment</button>
            <button>Update Patient</button>
            <button>Medical Supply</button>
            <button>View Reports</button>
        </div>
        <div class="main">
        <div class="form-container">
            <h1>Update Patient</h1>
           
                <form class="form-inline" action="" method="POST">
                <fieldset>
                    <label for="patientNo">Patient No.:</label>
                    <input type="text" id="patientNo" name="patientNo">

                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName">

                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName">

                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age">

                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                    </select>

                    <label for="civilStatus">Civil Status:</label>
                    <select id="civilStatus" name="civilStatus">
                        <option value="Single" selected>Single</option>
                        <option value="Married">Married</option>
                    </select>

                    <label for="contactNo">Contact No.:</label>
                    <input type="text" id="contactNo" name="contactNo">

                    <label for="barangay">Barangay:</label>
                    <input type="text" id="barangay" name="barangay">

                    <label for="city">City:</label>
                    <input type="text" id="city" name="city">

                    <label for="province">Province:</label>
                    <input type="text" id="province" name="province">
                </fieldset>
            </form>
                    <label for="service">Service:</label>
                    <select id="service" name="service">
                        <option value="Oral Prophylaxis" selected>Oral Prophylaxis</option>
                        <option value="Extraction">Extraction</option>
                        <option value="Filling">Filling</option>
                    </select>

                    <label for="total">Total:</label>
                    <input type="number" id="total" name="total">

                    <label for="payment">Payment:</label>
                    <input type="number" id="payment" name="payment">

                    <label for="balance">Balance:</label>
                    <input type="number" id="balance" name="balance">

                    <label for="change">Change:</label>
                    <input type="number" id="change" name="change">

                    <label for="checkupDate">Check-Up Date:</label>
                    <input type="date" id="checkupDate" name="checkupDate">

                    <div class="form-footer">
                        <button type="submit" name="save">Save</button>
                        <button type="reset">Back</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $patientNo = $_POST['patientNo'];
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $civilStatus = $_POST['civilStatus'];
        $contactNo = $_POST['contactNo'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $service = $_POST['service'];
        $total = $_POST['total'];
        $payment = $_POST['payment'];
        $balance = $_POST['balance'];
        $change = $_POST['change'];
        $checkupDate = $_POST['checkupDate'];

              echo "<script>alert('Patient details have been updated successfully!');</script>";
    }
    ?>
</body>
</html>