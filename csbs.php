`<?php include 'upload.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="sample.css">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            
        }

        .firstyear1 {
            margin-top: 20px;
            color:white;
        }

        .firstyear1 table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
           
        }

        .firstyear1 th, .firstyear1 td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: left;
           
        }
        tr:nth-child(even){
            background-color:#45f7b6;
            color:black;
        }
        .firstyear1 th {
            background-color: #f2f2f2;
        }
    

        .firstyear1 a {
            text-decoration: none;
            color: #3498db;
            cursor: pointer;
        }

        .firstyear1 a:hover {
            text-decoration: underline;
        }

        #sub1{
            
            background-color:#007FFF;
            widh:150px;
            height:28px;
            border-radius:5px;
            border:none;
            color:white;;
            
        }

        label {
            display:block;
            background:linear-gradient(to left, #f39c12, #e74c3c);
            color:transparent;
            background-clip: text;
            -webkit-background-clip:text;
            font-weight:bold;
            text-align:center;
            font-size:30px;
            margin-top:40px;
           
            
        }

    </style>
</head>

<body>
    <label for="firstyear">FIRSTYEAR</label>
<div id="firstyear" class="firstyear1">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Filename</th>
                <th>Subject</th>
                <th>Filesize (in bytes)</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Sem</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
               <?php if($file['year'] == 1  && $file['branch'] == "csbs"):?>
                    <tr>
                        <td><?php echo $file['id']; ?></td>
                        <td><?php echo $file['name']; ?></td>
                        <td><?php echo $file['subject']; ?> </td>
                        <td><?php echo $file['size']; ?></td>
                        <td><?php echo $file['branch']; ?></td>
                        <td><?php echo $file['year']; ?></td>
                        <td><?php echo $file['sem']; ?> </td>
                        <td>
                            <a href="upload.php?file_id=<?php echo $file['id']; ?>"><button type="submit" name="btns" id="sub1">Download</button></a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<label for="secondyear">SECONDYEAR</label>
<div id="secondyear" class="firstyear1">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Filename</th>
                <th>Subject</th>
                <th>Filesize (in bytes)</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Sem</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
               <?php if($file['year'] == 2 && $file['branch'] == "csbs"):?>
                    <tr>
                        <td><?php echo $file['id']; ?></td>
                        <td><?php echo $file['name']; ?></td>
                        <td><?php echo $file['subject']; ?> </td>
                        <td><?php echo $file['size']; ?></td>
                        <td><?php echo $file['branch']; ?></td>
                        <td><?php echo $file['year']; ?></td>
                        <td><?php echo $file['sem']; ?> </td>
                        <td>
                            <a href="index1.php?file_id=<?php echo $file['id']; ?>"><button type="submit" name="btns" id="sub1">Download</button></a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<label for="thirdyear">THIRDYEAR</label>
<div id="thirdyear" class="firstyear1">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Filename</th>
                <th>Subject</th>
                <th>Filesize (in bytes)</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Sem</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
               <?php if($file['year'] == 3 && $file['branch'] == "csbs"): ?>
                    <tr>
                        <td><?php echo $file['id']; ?></td>
                        <td><?php echo $file['name']; ?></td>
                        <td><?php echo $file['subject']; ?> </td>
                        <td><?php echo $file['size']; ?></td>
                        <td><?php echo $file['branch']; ?></td>
                        <td><?php echo $file['year']; ?></td>
                        <td><?php echo $file['sem']; ?> </td>
                        <td>
                            <a href="index1.php?file_id=<?php echo $file['id']; ?>"><button type="submit" name="btns" id="sub1">Download</button></a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<label for="fourthyear">FOURTHYEAR</label>
<div id="fourthyear" class="firstyear1">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Filename</th>
                <th>Subject</th>
                <th>Filesize (in bytes)</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Sem</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
               <?php if($file['year'] == 4 && $file['branch'] == "csbs"): ?>
                    <tr>
                        <td><?php echo $file['id']; ?></td>
                        <td><?php echo $file['name']; ?></td>
                        <td><?php echo $file['subject']; ?> </td>
                        <td><?php echo $file['size']; ?></td>
                        <td><?php echo $file['branch']; ?></td>
                        <td><?php echo $file['year']; ?></td>
                        <td><?php echo $file['sem']; ?> </td>
                        <td>
                            <a href="index1.php?file_id=<?php echo $file['id']; ?>"><button type="submit" name="btns" id="sub1">Download</button></a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>

</html>`