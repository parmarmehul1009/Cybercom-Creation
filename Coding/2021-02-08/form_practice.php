<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="view.php" method="POST">
        <table>
            <thead>
                <tr>
                    <th colspan="2">
                        <h1>User Form</h1>
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Enter Name</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Enter Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Enter Address</td>
                    <td><textarea name="address" id="address" cols="30" rows="3" required></textarea></td>
                </tr>
                <tr>
                    <td>Select Game</td>
                    <td><input type="checkbox" name="game[]" value="Hockey"> Hockey <br>
                        <input type="checkbox" name="game[]" value="Football"> Football <br>
                        <input type="checkbox" name="game[]" value="Badminton"> Badminton <br>
                        <input type="checkbox" name="game[]" value="Cricket"> Cricket <br>
                        <input type="checkbox" name="game[]" value="Volleyball"> Volleyball <br>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="gender"> Male <br><input type="radio" name="gender" required> Female <br>
                    </td>
                </tr>
                <tr>
                    <td>Select your age</td>
                    <td>
                        <select name="age" id="age" required>
                            <option selected value="above 18">select</option>
                            <option value="above 18">above 18</option>
                            <option value="below 18">below 18</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="file" name="file" id="file" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="reset" value="Reset">
                        <input type="submit" value="Submit Form">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>