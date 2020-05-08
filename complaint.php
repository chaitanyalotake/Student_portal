<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>     
       
     <style>
            .dropdown-submenu {
             position: relative;
            }

            .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
            }

            .img1{
            position: relative;
            font-family:sans-serif;
            font-variant: small-caps;
            }
            .centered{
                position: absolute;
                top:40%;
                bottom: 50%;
                left:27%;
            }

            #fade:hover{
               opacity: 0.2; 
                transition: 0.3s ease-in-out;
            }   
            .header{
                height: 39pxvw;
                //text-align: center;
                font-family:fantasy;
                letter-spacing: 0.5px;
                background:limegreen;
                font-size: 1.5vw;
                display:block;
                cursor: pointer;
            }

            a{
                color:darkslategray;
                text-decoration: none;
                padding: 20px;
            }

            .img2{
                position: relative;
                display: block;
            }
            
            .container{
                padding-top:50px;
                width:40%;
                height:200%;
                background-color: rgba(0,0,0,0.6);
                border-radius: 4px;
            }
            form {
                  border: 0px solid #f1f1f1;
            }
            button {
              padding: 10px 20px;
              margin: 50px;
              width: 85%;
            }
            .imgcontainer {
              text-align: center;
              margin: 24px 0 12px 0;
            }
            .avatar {
              vertical-align: middle;
              width: 170px;
              height: 170px;
              border-radius: 50%;
              //border-style: double;
              margin-top: -180px;
            }
            .txt{
                color: darkgray;
                font-size:13;
            }
            .txt1{
                color: darkgray;
                padding-left: 190px;
                font-size:13;
            }
            .dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
table {
  border-collapse: separate;
  border-spacing: 50px 0;
}

td {
  padding: 15px 10px ;
}


        </style>
    </head>
    <body>
        <div class="img1">
            <img src="header.jpg" width="100%" height="190" style="opacity: 0.2">
            <div class="centered" style="color: white" ><b><h1 style="font-size:2.5vw;background-color:rgba(0,0,0,0.6);"> Student Grievance Redressal Portal </h1></b></div>
        </div>
        <div>
        <form action="" method="post">
        <center>
        <table cellspacing="100">
          <tr>
            <td>
              Select State:*
            </td>
            <td>
                  <select name="state_name" id="state" class="text">
                    <option value="NA">Select State</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option selected="selected" value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Pondicherry">Pondicherry</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telagana">Telagana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Utar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
            
            </select>
                  
            </td>
          </tr>
        <tr>
         <td>
           Select University:*
         </td>
         <td>
           <select name="meal" id="meal" onchange="changeCat(this);">
     <option value="">Select</option>
     <option value="A">Dr. Babasaheb Ambedkar Marathwada University Aurangabad-431 004.</option>
     <option value="B">Dr. Babasaheb Ambedkar Technological University, Lonere-402 103</option>
     <option value="C">Dr. Punjabrao Deshmukh Krishi Vidyapeeth, Akola-444 104.</option>
     <option value="D">Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya, Nagpur-441 106</option>
     <option value="E">Konkan Krishi Vidyapeeth, Dapoli, District Ratnagiri-415 712</option>
     <option value="F">Maharashtra Animal & Fishery Sciences University, Seminary Hills, Nagpur-440 006.</option>
     <option value="G">Maharashtra University of Health Sciences, Nashik-422 013</option>
     <option value="H">Mahatma Phule Krishi Vidyapeeth, Rahuri-413 722.</option>
     <option value="I">Marathwada Agricultural University, Parbhani-431 402.</option>
     <option value="J">Mumbai University, Mumbai-400 032.</option>
     <option value="K">Nagpur University (Nagpur).</option>
     <option value="L">North Maharashtra University, Jalgaon- 425 001.</option>
     <option value="M">Pune University, Pune-411 007.</option>
     <option value="N">Sant Gadge Baba Amravati University, Amravati-444 602.</option>
     <option value="O">Shivaji University, Kolhapur-416 004.</option>
     <option value="P">Smt. Nathibai Damodar Thackersey Women's University, Mumbai-400 020.</option>
     <option value="Q">Solapur University, Solapur, Solapur Pune Road, Kegaon, Solapur-413 255.</option>
     <option value="R">Swami Ramanand Teerth Marathwada University, Nanded-431 606.</option>
     <option value="S">The Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur-440 001 (M.S).</option>
     <option value="T">Yashwant Rao Chavan Maharashtra Open University, Nashik-422 222</option>
     <option value="U">Mahatma Gandhi Antarrashtriya Hindi Vishwavidyalaya, Post Box No. 16, Panchtila, Umri Village, Arvi Road, Wardha, Mumbai - 442 001</option>
     <option value="V">Bharati Vidyapeeth Bharati Vidyapeeth Bhawan, Lal Bahadur Shastri Marg, Pune-411 030 Maharashtra</option>
     <option value="W">Central Institute of Fisheries Education Fisheries University Road, 7 Bungalows, Andheri West, Mumbai-400 061 Maharashtra</option>
     <option value="X">D.Y. Patil Educational Society Line Bazar, Kasaba, Bavada, Kolhapur-416 006 (Maharashtra)</option>
     <option value="Y">Datta Meghe Institute of Medical Sciences Atrey Layout, Pratap Nagar, Nagpur-440 022 (Maharashtra)</option>
     <option value="Z">Deccan College Postgraduate & Research Institute Pune-411 006 Maharashtra</option>
     <option value="a">Dr. D.Y. Patil Vidyapeeth Sant Tukaram Nagar, Pimpri, Pune-411 018 Maharashtra</option>
     <option value="b">Gokhale Institute of Politics & Economics BMC College Road, Deccan Gymkhana, Pune-411 004 Maharashtra</option>
     <option value="c">Homi Bhabha National Institute Regd. Office: Knowledge Management Group, Bhabha Atomic Research Centre, Central Complex, Mumbai-400 085 Maharashtra</option>
     <option value="d">Indira Gandhi Institute of Development Research General Vaidya Marg, Santosh Nagar, Goregaon East, Mumbai-400 065 Maharashtra</option>
     <option value="e">Institute of Armament Technology Girinagar, Pune-411 025 Maharashtra</option>
     <option value="f">International Institute for Population Sciences Govandi Station Road, Deonar, Mumbai-400 088 Maharashtra</option>
     <option value="g">Krishna Institute of Medical Sciences Malka Pur, Karad, Distt. Satara-415</option>
     <option value="h">MGM Institute of Health Sciences MGM Campus, Sector-18, Kamothe, Navi Mumbai-410 209</option>
     <option value="i">Narsee Monjee Institute of Management Studies VL Mehta Road, Vile Parle West, Mumbai-400 056 Maharashtra</option>
     <option value="j">Padmashree Dr. D.Y. Patl Vidyapeeth Vidya Nagar, Sector 7, Nerul, Navi Mumbai-400 706 Maharashtra</option>
     <option value="k">Pravara Institute of Medical Sciences P.O.-Loni BK-413 736, District Ahmednagar Maharashtra</option>
     <option value="l">SYMBIOSIS - International University, Senapati Bapat Road, Pune-411 004 Maharashtra</option>
     <option value="m">Tata Institute of Fundamental Research Homi Bhabha Road, Mumbai-400 005 Maharashtra</option>
     <option value="n">Tata Institute of Social Sciences VN Purav Marg, Deonar, Mumbai-400 088 Maharashtra</option>
     <option value="o">Tilak Maharashtra Vidyapeeth Vidyapeeth Bhawan, Gultekedi, Pune-411 037 Maharashtra</option>
     <option value="p">Institute of Chemical Technology Matunga, Mumbai Maharashtra</option>
   
     
</select>

         </td> 
        </tr>
        <tr>
            <td>
              Name of College:*
            </td>
            <td>
                  <select name="category" id="category">
     <option value="">Select</option>
</select>      
            </td>
          </tr>
        
        <tr>
            <td>
              Nature Of Grievance:*
            </td>
            <td>
                  <select name="ctl00$bps_homeCPH$MainTab$tblloadge$drpcompcategory" id="ctl00_bps_homeCPH_MainTab_tblloadge_drpcompcategory" style="width:400px;">
            <option selected="selected" value="Select">Select</option>
            <option value="Making admission contrary to merit">Making admission contrary to merit</option>
            <option value="Irregularity in the admission process">Irregularity in the admission process</option>
            <option value="Refusing admission in accordance with the declared admission policy of the institute">Refusing admission in accordance with the declared admission policy of the institute</option>
            <option value="Non publication of prospectus">Non publication of prospectus</option>
            <option value="Publishing false or misleading information in the prospectus">Publishing false or misleading information in the prospectus</option>
            <option value="Withhold or refuse to return any document (certificates of degree, diploma or any other award/document for the purpose of seeking admission)">Withhold or refuse to return any document (certificates of degree, diploma or any other award/document for the purpose of seeking admission)</option>
            <option value="Demand of money in excess of that specified in the declared admission policy">Demand of money in excess of that specified in the declared admission policy</option>
            <option value="Breach of the policy for reservation in admission">Breach of the policy for reservation in admission</option>
            <option value="Complaints, of alleged discrimination of students, from the Scheduled Castes, the Scheduled Tribes, Other Backward Classes, Women, Minority or Disabled categories">Complaints, of alleged discrimination of students, from the Scheduled Castes, the Scheduled Tribes, Other Backward Classes, Women, Minority or Disabled categories</option>
            <option value="Non payment or delay in payment of scholarships to any student">Non payment or delay in payment of scholarships to any student</option>
            <option value="Delay in conduct of examinations or declaration of results">Delay in conduct of examinations or declaration of results</option>
            <option value="No provision of student amenities">No provision of student amenities</option>
            <option value="Unfair evaluation practices">Unfair evaluation practices</option>
            <option value="Harassment and victimization of students, including sexual harassment">Harassment and victimization of students, including sexual harassment</option>
            <option value="Women related Grievances including Sexual harassment">Women related Grievances including Sexual harassment</option>

          </select>      
            </td>
          </tr>
          <tr>
            <td>
              Please enter grievance description:
            </td>
            <td>
              <textarea cols="60" rows="4" required="required" name="complaints_description" ></textarea>
            </td>
          </tr>
          <tr>
              <td class="styleleft" align="left" width="300px">
                 Have you earlier lodged the grievance to the above organisation/institutions on the same subject? :*
              </td>
              <td class="styleleft" align="left" width="550px">
                    <input id="" type="radio" name="" value="" /><label >Yes</label>
                    <input id="" type="radio" name="" value="" /><label>No</label>
              </td>
          </tr>
        </table>
        <table>
          <tr>
            <td>
              <button class="btn btn-primary" style="size: 10px" name="submit">Submit</button>
            </td>
            <td>
              <button class="btn btn-primary" >close</button>
            </td>
          </tr>

        </table>
         
          </center>

      </form>

      </div>
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connection, "complaint") or die ("no database");   // Selecting Database from Server
if(isset($_POST['submit']))
 { 
$complaints_description= $_POST['complaints_description'];  
$query = mysqli_query($connection,"insert into complaints(complaints_description) values ('$complaints_description')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
 }
 else{
 echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
 }
mysqli_close($connection); 
?>
      <script type="text/javascript">var A= ["chaitanya"];    
    var B= ["Soup","Juice","Water", "Others"];
    var C= ["Soup","Juice","Coffee", "Tea","Others"];
    var O=["Walchand College of Engineering, Sangli","Government College of Engineering Karad","DKTE Textile and Engineering College,Ichalkaranji","Kolhapur Institute of Technology, Kolhapur","Tatyasaheb Kore Institute of Engineering and Technology,Warnanagar"]
var changeCat = function changeCat(firstList) {
    var newSel = document.getElementById("category");
    //if you want to remove this default option use newSel.innerHTML=""
    newSel.innerHTML="<option value=\"\">Select</option>"; // to reset the second list everytime
    var opt;

      //test according to the selected value
      switch (firstList.options[firstList.selectedIndex].value) {
          case "A":
              for (var i=0; len=A.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = A[i];
                    opt.text = A[i];
                    newSel.appendChild(opt);
              }
              break;
          case "B":
              for (var i=0; len=B.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = B[i];
                    opt.text = B[i];
                    newSel.appendChild(opt);
              }
              break;
          case "C":
              for (var i=0; len=C.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = C[i];
                    opt.text = C[i];
                    newSel.appendChild(opt);
              }
              break;
          case "O":
              for (var i=0; len=O.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = O[i];
                    opt.text = O[i];
                    newSel.appendChild(opt);
              }
              break;
      }

}</script>

    </body>
</html>

            
    