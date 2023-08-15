<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Let's Start D Journey</title>
     <style>
       body{
         background-color: black;
         color: whitesmoke;
       }
       .basic{
         align-self: auto;
         border-radius: 20px;
         width:30%;
       }
       .personal{
         align-content: right;
         width:30%;
         border-radius: 20px;
       }
       .cube{
         position: relative;
         width: 300px;
         height: 300px;
         transform-style: preserve-3d;
         transform: rotateX(-30deg);
         animation: animate 4s linear infinite;
        }
        @keyframes animate
        {
          0%
          {
            transform: rotateX(-30deg) rotateY(0deg);
          }
          100%
          {
            transform: rotateX(-30deg) rotateY(360deg);
          }
        }
        .cube div{
          position: absolute;
          top: 0px;
          left: 0px;
          width: 100%;
          height: 100%;
          transform-style: preserve-3d;
        }
        .cube div span{
          position: absolute;
          top: 0px;
          left: 0px;
          height: 100%;
          width: 100%;
          background: linear-gradient(#151515,#00ec00);
          transform: rotateY(calc(90deg * var(--i))) translateZ(150px);
        }
        .top{
          position: absolute;
          top: 0px;
          left: 0px;
          width: 300px;
          height: 300px;
          background: #222;
          transform: rotateX(90deg) translateZ(150px);
        }
        .top::before{
          content: '';
          position:absolute;
          top: 0px;
          left: 0px;
          width: 300px; 
          height: 300px;
          background: #0f0;
          transform: translateZ(-400px);
          filter: blur(20px);
          box-shadow: 0px,0px,120px rgba(0, 255, 0, 0.2);
        }
        .img{
          position: relative;
        }

    </style>
</head>
<body background=".jpg">
  <link rel="icon" type="image/png" href="download.png"> 
    <h1 style="color:blue;text-align:center;">Registration Info</h1><br><br><br>
    <form action="signcopy.php" method="post">
    <fieldset class="basic" style="float:left">
    <div >
    <P><u><h3 style="color: coral;">Basic Details</h3></u></P>
    <p>Name-</p><input type="text" placeholder="First Name" maxlength="30" name="firstname" pattern="(?!^[aA][dD][mM][iI][nN]([iI][sS][tT][rR][aA][tT][oO][rR])?$)(?!^root$).{3,20}">
    <input type="text" placeholder="Last Name" maxlength="30" name="lastname" pattern="(?!^[aA][dD][mM][iI][nN]([iI][sS][tT][rR][aA][tT][oO][rR])?$)(?!^root$).{3,20}" /><br/>
    <p>e-mail</p><input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="e-mail"></input>
    <p>Password</p><input type="password" id="pwd" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Eight or more characters" placeholder="Password"></input>
    <h6><p>Password must contain atleast one number,one uppercase and lower case letter,<br>
    atleast 8 or more charachters.</p></h6>
    <p>Phone number-1</p><input type="tel" id="phone" name="phone" placeholder="1234567890"></input>
    <p>Phone number-2</p><input type="tel" id="phone" name="phone1"placeholder="1234567890"></input>
    </div>
  </fieldset>
    <img src="Tt.png" alt="train" style="float:left; padding-left:105px;">
      <fieldset class="personal" style="float:right;">
    <div  >
    <p><u><h3 style="color: darkcyan;">Personal Details</h3></u></p>
    <p>Info!Please provide your exact name as per Aadhaar to avail Aadhaar<br>
       based benefits on Railway eTicketing website.</p>
    <p>Occupation</p>
    <select name="Occupation">
      <option value="">-- select one --</option>
      <option value="GOVERNEMENT">GOVERNEMENT</option>
      <option value="PUBLIC">PUBLIC</option>
      <option value="PRIVATE">PRIVATE</option>
      <option value="PROFESSIONAL">PROFESSIONAL</option>
      <option value="SELF-EMPLOYED">SELF-EMPLOYED</option>
      <option value="STUDENT">STUDENT</option>
      <option value="Other">Other</option>
    </select>
    <p>Gender</p>
      <input type="radio" name="gender" value="male"> Male
      <input type="radio" name="gender" value="female"> Female
      <input type="radio" name="gender" value="other"> Other
    <p>Date Of Birth:</p><input type="date" id="Test_DatetimeLocal" name="DOB"></input>
    <p>Nationality</p>
    <select name="nationality">
  <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select></br></br></br><br>
<input type="submit"> <a href="mailto:sethudhfm2002@gmail.com"></a>
<input type="reset"> </fieldset>
</div>
</form>
</form>
</body>
</html>