    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <style>
    table, th, td {
    border: 1px solid black ;
    border-collapse: collapse;
    }
    th {
    background-color: #96D4D4;
    }
    .center {
    margin-left: auto;
    margin-right: auto;
    }
    .b1 {
        margin-left: 260px;
    /* margin-right: 49%; */
    /* padding: 1%; */
    width: 48%;
    padding:5px;
    background-color: #96D4D4;
    }
    </style>
    <body>
        <p style="text-align: center;">Questionnaire for Closed Accounts/Services Survey</p>
    <form action="form1.php" method="post">
        <table class="center" >
        <tr>
        <th>S. No.</th>
        <th>Question</th> 
        <th style="width:25%;">Response</th>
        </tr>
    <tr>
        <td>1 </td>
        <td>
            <p>We would like to understand the reasons that lead you to close your accounts/relationship with HBL.</p>
            <br>
            <p>App nei kis wajah say apna account/service HBL say muntakil ki?</p>
        </td>
        <td>
            <input type="radio" name="f1" value="yes" id='radio'>Yes<br>
            <input type="radio" name="f1" value="no" id='radio1'>No<br>
            <input type="radio" name="f1"  value="other" id='other_radio'>Other<br>
            <input type="text"  name="f1_t" class='txbx' hidden="true"/> <br/>
        </td>
    </tr>
    <tr>
        <td>2 </td>
        <td>
            <p>Please explain to me your experience (what happened next, probe) ?</p>
            <br>
            <p>Sir us doran aap ka experience kaisa raha tha? Thori tafseel bata deyn</p>
        </td>
        <td>
            <input type="radio" name="f2" value="yes" id='radio2'>Yes<br>
            <input type="radio" name="f2" value="no" id='radio12'>No<br>
            <input type="radio" name="f2" value="other" id='other1_radio'>Other<br>
            <input type="text"  name="f2_t" class='text2' hidden="true"/> <br/>
        </td>
    </tr>
    <tr>
        <td>3 </td>
        <td>
            <p>If you had any issues/grievances, did you log in a complaint?</p>
            <br>
            <p>Agar aap ko koi duswari ya mushkilat paish aai tu keya aap nei kabhi complaint ki?</p>
        </td>
        <td>
            <input type="radio" name="f3" value="yes" id='radio3'>Yes<br>
            <input type="radio" name="f3" value="no"  id='radio13'>No<br>
        </td>
    </tr>
    <tr>
        <td>4 </td>
        <td>
            <p>If yes – were you given a complain no.?</p>
            <br>
            <p>Complain karni ki soorat mei aap ko koi complaint number dia gaya tha?</p>
        </td>
        <td>
            <input type="radio" name="f4" value="yes" id='radio4'>Yes<br>
            <input type="radio" name="f4" value="no" id='radio14'>No<br>
        </td>
    </tr>
    <tr>
        <td>5 </td>
        <td>
            <p>Did anyone follow up with you?</p>
            <br>
            <p>Bank ki janib se kia kisi nay app ki complaint kay baad app se us complain kay mutalik follow-up keya?</p>
        </td>
        <td>
            <input type="radio" name="f5" value="yes" id='radio5'>Yes<br>
            <input type="radio" name="f5" value="no" id='radio15'>No<br>
        </td>
    </tr>
    <tr>
        <td>6 </td>
        <td>
            <p>Did you get a closure message from the bank?</p>
            <br>
            <p>Complain close honai ki soorat mei kia aap ko bank ki taraf say koi message aya tha?</p>
        </td>
        <td>
            <input type="radio" name="f6" value="yes" id='radio6'>Yes<br>
            <input type="radio" name="f6" value="no" id='radio16'>No<br>
        </td>
    </tr>
    <tr>
        <td>7 </td>
        <td>
            <p>If no, why did you not log in a complaint sir?</p>
            <br>
            <p>Agar Q3 ka jawab “nahe” hai tu, sir/Madam app nay complaint kion nahe darj karwaye?</p>
        </td>
        <td>
            <input type="radio" name="f7" value="yes" id='radio7'>Yes<br>
            <input type="radio" name="f7" value="no" id='radio17'>No<br>
            <input type="radio" name="f7" value="other" id='other7_radio'>Other<br>
            <input type="text"  name="f7_t" class='text7' hidden="true"/> <br/>
        </td>
    </tr>
    </table>
    <button type="submit" class="b1">save</button>
    </form>
    </body>
    <script>
        $(document).ready(function ()
        {
        $('#other_radio').click(function() {
            $('.txbx').attr('hidden',false);
            $('.txbx').prop('required',true);
        });           
        $('#radio1').click(function() {
            $('.txbx').attr('hidden',true);
            $('.txbx').prop('required',false);
        });
        $('#radio').click(function() {
            $('.txbx').attr('hidden',true);
            $('.txbx').prop('required',false);

        });

        $('#other1_radio').click(function() {
            $('.text2').attr('hidden',false);
            $('.text2').prop('required',true);
        });           
        $('#radio2').click(function() {
            $('.text2').attr('hidden',true);
            $('.text2').prop('required',false);
        });
        $('#radio12').click(function() {
            $('.text2').attr('hidden',true);
            $('.text2').prop('required',false);
        });

        $('#other7_radio').click(function() {
            $('.text7').attr('hidden',false);
            $('.text7').prop('required',true);
        });           
        $('#radio17').click(function() {
            $('.text7').attr('hidden',true);
            $('.text7').prop('required',false);
        });
        $('#radio7').click(function() {
            $('.text7').attr('hidden',true);
            $('.text7').prop('required',false);
        });

        });
    </script>
    </html>