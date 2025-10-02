$(document).ready(function () {
    $('.justNumbers').on('keydown', function(e){
        var str = ' ابتثحخدذرزسشصضطظعغفقكلمنهويءؤإأآئ،!#$٪^&*)()؟><\/=|@-+abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var arabicNumbers = '٠١٢٣٤٥٦٧٨٩';
        
        var id = document.activeElement.id;
        
        if(str.includes(e.key))
        {
            //هنا استثناء مجموعة الإختصارات لصق ونسخ وقص وتحديد وتحديث
            if(!((e.key == 'v' || e.key == 'V') && (e.metaKey || e.ctrlKey)) &&
               !((e.key == 'c' || e.key == 'C') && (e.metaKey || e.ctrlKey)) &&
               !((e.key == 'x' || e.key == 'X') && (e.metaKey || e.ctrlKey)) &&
               !((e.key == 'a' || e.key == 'A') && (e.metaKey || e.ctrlKey)) &&
               !((e.key == 'r' || e.key == 'R') && (e.metaKey || e.ctrlKey)))
            {
                $('#'+id).popover('show');
                setTimeout(function(){ $('.justNumbers').popover('hide'); },3000);
                return false;
            }
        }
        else if(arabicNumbers.includes(e.key))
        {
            if(document.getElementById(id).value.length < 10)
            {
                switch (e.key)
                {
                    case '٠':
                        document.getElementById(id).value += '0';
                        break;
                    case '١':
                        document.getElementById(id).value += '1';
                        break;
                    case '٢':
                        document.getElementById(id).value += '2';
                        break;
                    case '٣':
                        document.getElementById(id).value += '3';
                        break;
                    case '٤':
                        document.getElementById(id).value += '4';
                        break;
                    case '٥':
                        document.getElementById(id).value += '5';
                        break;
                    case '٦':
                        document.getElementById(id).value += '6';
                        break;
                    case '٧':
                        document.getElementById(id).value += '7';
                        break;
                    case '٨':
                        document.getElementById(id).value += '8';
                        break;
                    case '٩':
                        document.getElementById(id).value += '9';
                        break;
                }
            }
            
            return false;
        }
    });
    
    $('.justEmails').on('keydown', function(e){
        var str = ' ابتثحخدذرزسشصضطظعغفقكلمنهويءؤإأآئ،!#$٪^&*)()؟><\/=|٠١٢٣٤٥٦٧٨٩٠';
        if(str.includes(e.key))
        {
            $('.justEmails').popover('show');
            setTimeout(function(){ $('.justEmails').popover('hide'); },3000);
            return false;
        }
    });
    
    $('.justPasswords').on('keydown', function(e){
        var str = ' ١٢٣٤٥٦٧٨٩٠ابتثجحخدذرزسشصضطظعغفقكلمنهويىئءأإؤآ';
        if(str.includes(e.key))
        {
            $('.justPasswords').popover('show');
            setTimeout(function(){ $('.justPasswords').popover('hide'); },3000);
            return false;
        }
    });
});


function onNumberInputChange(thisObj, ques_id, isMobile)
{
    if(isMobile == 1)//إذا كان المدخل جوال
    {
        if(thisObj.value.length != 0 && (thisObj.value.length != 10 || thisObj.value.substring(0,2) != '05'))//إذا كان الجوال المدخل غير صحيح
        {
            thisObj.style.background = '#ff9f9f';
            thisObj.focus();
            document.getElementById('addAnswerButton').disabled = true;
        }
        else//المدخل جوال صحيح
        {
            thisObj.style.background = '#ffffff';
            document.getElementById('addAnswerButton').disabled = false;
        }
    }
    
    document.getElementById('ansNumber_'+ques_id).value = thisObj.value;
}


function onCharInputChange(thisObj, ques_id, isEmail)
{
    if(isEmail == 1)//إذا كان المدخل ايميل
    {
        if(thisObj.value.length != 0 && (thisObj.value.length < 6 || thisObj.value.indexOf("@") < 1 || thisObj.value.lastIndexOf(".") < 3))//إذا كان الايميل المدخل غير صحيح
        {
            thisObj.style.background = '#ff9f9f';
            thisObj.focus();
            document.getElementById('addAnswerButton').disabled = true;
        }
        else//المدخل ايميل صحيح
        {
            thisObj.style.background = '#ffffff';
            document.getElementById('addAnswerButton').disabled = false;
        }
    }
    
    document.getElementById('ansChar_'+ques_id).value = thisObj.value;
}


function scrollToTop()
{
    window.scroll({
        top: 0, 
        left: 0, 
        behavior: 'smooth'
    });
}


function reorderQuestions(org_id)
{    
    var quesOrder = $('#sortable').sortable("toArray");
    quesOrder = quesOrder.join('@');
    quesOrder += '@';
    
    if(window.navigator.onLine)//إذا كان متصل بالإنترنت
    {
        $.ajax({ type: "POST",
                url: "_reorderQuestions.php",
                data: { org_id: org_id,
                        quesOrder: quesOrder },
                success: function(results)
                {
                }
               });
    }
    else
    {
        alert('الرجاء فحص الاتصال بالإنترنت.. لم يتم حفظ الترتيب الجديد!');
    }
}


function goToStep1()
{
    $("#step2").hide();
    $("#step3").hide();
    $("#step1").show();
    
    document.getElementById('td1').style.backgroundColor = document.getElementById('frontTdColor').value;
    document.getElementById('td2').style.backgroundColor = document.getElementById('backTdColor').value;
    document.getElementById('td3').style.backgroundColor = document.getElementById('backTdColor').value;
}


function goToStep2()
{
    if(document.getElementById('name').value.length < 3)
    { alert('يجب إدخال الاسم!'); }
    else if(document.getElementById('mobile').value.length != 10 || document.getElementById('mobile').value.substring(0,2) != '05')
    { alert('فضلا أدخل رقم الجوال بالصيغة التالية 0555123456'); }
    /*else if(document.getElementById('email').value.length < 6 ||
            document.getElementById('email').value.indexOf("@") < 1 ||
            document.getElementById('email').value.lastIndexOf(".") < 3 ||
            document.getElementById('email').value.indexOf(" ") > -1)//لمنع احتواء الايميل على مسافات
    { alert('يجب إدخال بريد إلكتروني صحيح!'); }*/
    else
    {
        $("#step1").hide();
        $("#step3").hide();
        $("#step2").show();

        document.getElementById('td1').style.backgroundColor = document.getElementById('backTdColor').value;
        document.getElementById('td2').style.backgroundColor = document.getElementById('frontTdColor').value;
        document.getElementById('td3').style.backgroundColor = document.getElementById('backTdColor').value;
    }
}


function goToStep3()
{
    if(document.getElementById('orgName').value.length < 3)
    { alert('يجب إدخال اسم المحل أو الجهة بشكل صحيح!'); }
    else if(document.getElementById('mobile').value.length != 10 || document.getElementById('mobile').value.substring(0,2) != '05')
    {
        alert('فضلا أدخل رقم الجوال بالصيغة التالية 0555123456');
        goToStep1();
    }
    else
    {
        $("#step1").hide();
        $("#step2").hide();
        $("#step3").show();

        document.getElementById('td1').style.backgroundColor = document.getElementById('backTdColor').value;
        document.getElementById('td2').style.backgroundColor = document.getElementById('backTdColor').value;
        document.getElementById('td3').style.backgroundColor = document.getElementById('frontTdColor').value;
    }
}


function createAccount()
{
    if(document.getElementById('name').value.length < 3)
    { alert('يجب إدخال الاسم!'); }
    else if(document.getElementById('mobile').value.length != 10 || document.getElementById('mobile').value.substring(0,2) != '05')
    { alert('فضلا أدخل رقم الجوال بالصيغة التالية 0555123456'); }
    /*else if(document.getElementById('email').value.length < 6 ||
            document.getElementById('email').value.indexOf("@") < 1 ||
            document.getElementById('email').value.lastIndexOf(".") < 3 ||
            document.getElementById('email').value.indexOf(" ") > -1)//لمنع احتواء الايميل على مسافات
    { alert('يجب إدخال بريد إلكتروني صحيح!'); }*/
    else if(document.getElementById('orgName').value.length < 3)
    { alert('يجب إدخال اسم المحل أو الجهة بشكل صحيح!'); }
    else if(document.getElementById('password1').value.length < 6)
    { alert('كلمة المرور يجب أن تتكون من ٦ أحرف أو أكثر!'); }
    else if(document.getElementById('password1').value != document.getElementById('password2').value)
    { alert('كلمتي المرور غير متطابقتين!'); }
    else if(document.getElementById('agree').checked != true)
    { alert('الرجاء الإطلاع والموافقة على شروط الاستخدام وسياسة الخصوصية!'); }
    else
    {
        $.ajax({ type: "POST",
            url: "_createAccount.php",
            data: { name: document.getElementById("name").value,
                    mobile: document.getElementById("mobile").value,
                    //email: document.getElementById("email").value,
                    orgName: document.getElementById("orgName").value,
                    password1: document.getElementById("password1").value,
                    password2: document.getElementById("password2").value },
            success: function(results)
            {
                if(results == '1')
                {
                    $('#registerDiv').hide('slow');
                    $('#loadingDiv').show('slow');
                    setTimeout(function()
                    {
                        $('#loadingDiv').hide('slow');
                        $('#accountCreatedDiv').show('slow');
                    },6000);
                }
                else if(results == '2')//الجوال مسجل مسبقا
                {
                    goToStep1();
                    alert('يوجد حساب مسجل بنفس رقم الجوال! فقط عليك تسجيل الدخول إلى الحساب.. أو التواصل مع الدعم الفني إذا كنت تواجه مشكلة');
                }
                else if(results == '3')//كلمتي المرور غير متطابقتين
                {
                    alert('كلمتي المرور غير متطابقتين!');
                }
                else if(results == '4')//معلومات ناقصة
                {
                    alert('يرجى التأكد من إدخال جميع المعلومات المطلوبة!');
                }
                else
                {
                    alert('عذرا حدث خطأ! الرجاء المحاولة مره أخرى أو التواصل مع الدعم الفني إذا استمرت المشكلة');
                }
            }
           });
    }
}


function login()
{
    if(document.getElementById('mobile').value.length != 10 || document.getElementById('mobile').value.substring(0,2) != '05')
    { alert('فضلا أدخل رقم الجوال بالصيغة التالية 0555123456'); }
    else if(document.getElementById('password').value.length < 6)
    { alert('كلمة المرور غير مقبولة!'); }
    else
    {
        $.ajax({ type: "POST",
            url: "_login.php",
            data: { mobile: document.getElementById("mobile").value,
                    password: document.getElementById("password").value },
            success: function(results)
            {
                if(results == '1')
                {
                    window.location = "index.php?rate=list&day=list";
                }
                else if(results == '2')//معلومات تسجيل الدخول خاطئة
                {
                    alert('هناك خطأ في رقم الجوال أو كلمة المرور!');
                }
                else
                {
                    alert('عذرا حدث خطأ! الرجاء التأكد من الاتصال بالانترنت!');
                }
            }
           });
    }
}


function selectAnswer(img, ques_id, value)
{
    var imgUrl = img.src;
    var fileLastChars;
    var otherImgsUrls;
    
    fileLastChars = imgUrl.substring(imgUrl.length-10, imgUrl.length);
    imgUrl = imgUrl.substring(0, imgUrl.length - 4);
    
    if(fileLastChars != 'select.png')
    {
        var className = img.className;
        var x = document.getElementsByClassName(className);
        var i;
        for (i = 0; i < x.length; i++)
        {
            fileLastChars = x[i].src.substring(x[i].src.length-10, x[i].src.length);
            
            if(fileLastChars == 'select.png')
            {
                x[i].src = x[i].src.substring(0, x[i].src.length - 10) + '.png';
            }
        }
        
        imgUrl += 'select.png';
        img.src = imgUrl;
        document.getElementById('ansValue_'+ques_id).value = value;
    }
}


function showQuestionEditDialogBox(ques_id, ansType, ansOptional, isMobile, isEmail)
{
    $.ajax({ type: "GET",
        url: "_editQuesModal.php",
        data: {ques_id: ques_id},
        success: function(results)
        {
            $('#modal-body').html(results);
            $('#myModal').modal({ closeByBackdrop: false });
            
            //selectAnswersChoices(ansType);
            optional(ansOptional);
            isMobile(isMobile);
            isEmail(isEmail);
        }
    });
}


function showNewQuestionAddDialogBox()
{
    $.ajax({ type: "GET",
        url: "_addQuesModal.php",
        data: {},
        success: function(results)
        {
            $('#modal-body3').html(results);
            $('#myModal3').modal();
            
            //selectAnswersChoices(1);
            //optional(0);
        }
    });
}


function saveEditedQuestion(ques_id)
{
    if(document.getElementById('ques').value.length < 3) { alert('السؤال قصير جدا!'); }
    else
    {
        if(document.getElementById('oldAnsType').value != document.getElementById('ansType').value)//إذا تم تغيير نوعية الإجابة على السؤال فإنه يلغي السؤال السابق ويضيف سؤال جديد
        {
            addNewQuesAndDeleteOld();
        }
        else if(document.getElementById('oldQues').value != document.getElementById('ques').value)//إذا تغير نص السؤال ولم تتغير نوعية الإجابة فإنه يسأل المستخدم إذا كان يرغب باعتباره سؤال جديد أم نفس السابق ولكن بصيغة مختلفة
        {
            $.ajax({ type: "GET",
                url: "_editOrNewQuesModal.php",
                data: {ques_id: ques_id,
                       ques: document.getElementById('ques').value,
                       ansType: document.getElementById('ansType').value,
                       isMobile: document.getElementById('isMobile').value,
                       isEmail: document.getElementById('isEmail').value,
                       optional: document.getElementById('optional').value},
                success: function(results)
                {
                    $('#modal-body2').html(results);
                    $('#myModal2').modal();
                }
            });
        }
        else//هنا قد يكون التغيير فقط بين إجابة إختيارية وإلزامية وعندها فقط يتم تحديث بيانات السؤال
        {
            updateQues();
        }
    }
}


function addNewQuesAndDeleteOld(thisButton)
{
    if(document.getElementById('ques').value == '') { alert('لم تقم بكتابة السؤال!'); }
    else if(document.getElementById('ques').value.length < 3) { alert('السؤال قصير جدا!'); }
    else
    {
        thisButton.disabled = true;
        
        $.ajax({ type: "POST",
                url: "_addNewQuesAndDeleteOld.php",
                data: { ques_id: document.getElementById("ques_id").value,
                        ques: document.getElementById("ques").value,
                        ansType: document.getElementById("ansType").value,
                        isMobile: document.getElementById('isMobile').value,
                        isEmail: document.getElementById('isEmail').value,
                        optional: document.getElementById("optional").value },
                success: function(results)
                {
                    if(results == '1')
                    {
                        location.reload();
                    }
                    else
                    {
                        alert('عذرا حدث خطأ! الرجاء التأكد من الاتصال بالانترنت!');
                        
                        thisButton.disabled = false;
                    }
                }
               });
    }
}


function updateQues()
{
    $.ajax({ type: "POST",
            url: "_updateQues.php",
            data: { ques_id: document.getElementById("ques_id").value,
                    ques: document.getElementById("ques").value,
                    ansType: document.getElementById("ansType").value,
                    isMobile: document.getElementById('isMobile').value,
                    isEmail: document.getElementById('isEmail').value,
                    optional: document.getElementById("optional").value },
            success: function(results)
            {
                if(results == '1')
                {
                    location.reload();
                }
                else
                {
                    alert('عذرا حدث خطأ! الرجاء التأكد من الاتصال بالانترنت!');
                }
            }
           });
}


function deleteQues(ques_id)
{
    $.ajax({ type: "POST",
            url: "_deleteQues.php",
            data: { ques_id: ques_id },
            success: function(results)
            {
                if(results == '1')
                {
                    $('#'+ques_id).hide('slow');
                }
                else
                {
                    alert('عذرا حدث خطأ! الرجاء التأكد من الاتصال بالانترنت!');
                }
            }
           });
}


function selectAnswersChoices(ansNumber)
{
    document.getElementById('ansType').value = ansNumber;
    
    var x = document.getElementsByClassName('AnswersChoices');
    var i;
    
    for(i=0 ; i<x.length ; i++)
    {
        x[i].style.borderColor = "#ffffff";
        x[i].style.backgroundColor = '#ffffff';
    }
    
    document.getElementById('answer'+ansNumber).style.borderColor = 'green';
    document.getElementById('answer'+ansNumber).style.backgroundColor = '#d3ffd3';
    document.getElementById('circle'+ansNumber).style.borderColor = 'green';
    document.getElementById('circle'+ansNumber).style.backgroundColor = '#d3ffd3';
    
    if(ansNumber >= 6)//إذا تم اختيار الإجابة نصية أو رقم
    {
        $('#optionalOrRequiredDiv').show('fast');
        optional(1);//لإعادة الإختيار إلى اختياري
        
        if(ansNumber == 6)//إذا كانت الإجابة رقم
        {
            document.getElementById('mobile1').disabled = false;
            document.getElementById('mobile0').disabled = false;
        }
        else if(ansNumber == 7)//إذا كانت الإجابة حقل نص صغير
        {
            document.getElementById('email1').disabled = false;
            document.getElementById('email0').disabled = false;
        }
    }
    else
    {
        $('#optionalOrRequiredDiv').hide('fast');
        optional(0);//لإعادة الإختيار إلى إلزامي
    }
}


function optional(choice)
{
    document.getElementById('optional1').style.border = '1px solid #aaaaaa';
    document.getElementById('optional0').style.border = '1px solid #aaaaaa';
    document.getElementById('optional1').style.backgroundColor = '#ffffff';
    document.getElementById('optional0').style.backgroundColor = '#ffffff';
    
    document.getElementById('optional'+choice).style.border = '2px solid green';
    document.getElementById('optional'+choice).style.backgroundColor = '#d3ffd3';
    
    document.getElementById('optional').value = choice;
}


function isMobile(choice)
{
    document.getElementById('isMobile1').style.border = '1px solid #aaaaaa';
    document.getElementById('isMobile0').style.border = '1px solid #aaaaaa';
    document.getElementById('isMobile1').style.backgroundColor = '#ffffff';
    document.getElementById('isMobile0').style.backgroundColor = '#ffffff';
    
    document.getElementById('isMobile'+choice).style.border = '2px solid green';
    document.getElementById('isMobile'+choice).style.backgroundColor = '#d3ffd3';
    
    document.getElementById('isMobile').value = choice;
}


function isEmail(choice)
{
    document.getElementById('isEmail1').style.border = '1px solid #aaaaaa';
    document.getElementById('isEmail0').style.border = '1px solid #aaaaaa';
    document.getElementById('isEmail1').style.backgroundColor = '#ffffff';
    document.getElementById('isEmail0').style.backgroundColor = '#ffffff';
    
    document.getElementById('isEmail'+choice).style.border = '2px solid green';
    document.getElementById('isEmail'+choice).style.backgroundColor = '#d3ffd3';
    
    document.getElementById('isEmail').value = choice;
}


function showSideLinks()
{
    slideDown();
    $('#blackScreen').show();
    $('#showButton').hide();
    $('#hideButton').show();
    $('#sideLinksDiv').animate({ right: "0px", }, 200);
}


function hideSideLinks()
{
    $('#blackScreen').hide();
    $('#showButton').show();
    $('#hideButton').hide();
    $('#sideLinksDiv').animate({ right: "-200px", }, 200);
}


function slideUp()
{
    $('#list').hide('fast');
    $('#slideUp').hide('fast');
    $('#slideDown').show('fast');
}


function slideDown()
{
    $('#list').show('fast');
    $('#slideDown').hide('fast');
    $('#slideUp').show('fast');
}


function screenResize()
{
    if(document.body.clientWidth >= 1000 && document.getElementById('sideLinksDiv').style.right == '-200px')//تكبير القائمة اليمنى
    {
        slideDown();
        $('#showButton').hide();
        $('#hideButton').hide();
        $('#sideLinksDiv').animate({ right: "0px", }, 200);
    }
    else if(document.body.clientWidth < 1000 && document.getElementById('sideLinksDiv').style.right == '0px')//تصغير القائمة اليمنى
    {
        $('#showButton').show();
        $('#sideLinksDiv').animate({ right: "-200px", }, 200);
    }
}


function copyURL()
{
    //Get the text field
    var copyText = document.getElementById("url");
    
    //Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    //Copy the text inside the text field
    document.execCommand("copy");
    
    //لإلغاء التحديد
    if(window.getSelection) {window.getSelection().removeAllRanges();}
    else if(document.selection) {document.selection.empty();}
    
    copyText.style.backgroundColor = '#7c7c7c';
    copyText.animate({ backgroundColor: '#ffffff' }, 400);
    setTimeout(function(){ copyText.style.backgroundColor = '#ffffff'; },400);
}


function addAnswer()
{
    document.getElementById('addAnswerButton').disabled = true;
    document.getElementById('addAnswerButton').className = 'btn btn-secondary';
    
    if(window.navigator.onLine)//إذا كان متصل بالإنترنت
    {
        $.ajax({ type: "POST",
            url: "_addAnswer.php",
            data: $("#answers_form").serialize(),
            success: function(results)
            {
               // console.log(results);
                if(results == '1')//تم بنجاح.. والإجابة من الايباد أو التابلت الخاص بالمحل
                {
                    $('#evalForm').hide('slow');
                    $('#evalDone').show('slow');
                    setTimeout(function(){ location.reload(); },6000);
                }
                else if(results == '2')//تم بنجاح.. والإجابة من جوال العميل
                {
                    $('#evalForm').hide('slow');
                    $('#evalDone').show('slow');
                }
                else if(results == '3')
                {
                    document.getElementById('errorMessage').innerHTML = 'لم تجب على جميع الأسئلة المطلوبة!';
                    $('.modal').modal();
                    document.getElementById('addAnswerButton').disabled = false;
                    document.getElementById('addAnswerButton').className = 'GreenButton';
                }
                else if(results == '4')
                {
                    document.getElementById('errorMessage').innerHTML = 'رقم الجوال المدخل خاطئ!';
                    $('.modal').modal();
                    document.getElementById('addAnswerButton').disabled = false;
                    document.getElementById('addAnswerButton').className = 'GreenButton';
                }
                else
                {
                    document.getElementById('errorMessage').innerHTML = 'حدث خطأ!<br />لم يتم ارسال التقييم.. الرجاء إعادة المحاولة!';
                    $('.modal').modal();
                    document.getElementById('addAnswerButton').disabled = false;
                    document.getElementById('addAnswerButton').className = 'GreenButton';
                }
            }
        });
    }
    else//إذا لم يكن متصل بالإنترنت
    {
        document.getElementById('errorMessage').innerHTML = 'لم يتم الإرسال!<br />هناك مشكلة بالإتصال بالإنترنت..<br />يرجى إبلاغ الموظف بذلك!';
        $('.modal').modal();
        document.getElementById('addAnswerButton').disabled = false;
        document.getElementById('addAnswerButton').className = 'GreenButton';
    }
}


function sendSupport()
{
    if(document.getElementById('supportText').value.length < 4) { alert('الرجاء كتابة الدعم المطلوب'); }
    else
    {
        document.getElementById('sendSupportButton').disabled = true;

        $.ajax({ type: "POST",
            url: "_sendSupport.php",
            data: { note: document.getElementById('supportText').value },
            success: function(results)
            {
                if(results == '1')
                {
                    $('#supportDiv').hide('slow');
                    $('#supportSent').show('slow');
                    setTimeout(function(){ location.reload(); },4000);
                }
                else
                {
                    alert("حدث خطأ! الرجاء التحقق من الاتصال بالإنترنت!");
                    document.getElementById('sendSupportButton').disabled = false;
                }
            }
           });
    }
}


function sendSupportReplay(support_id, ticket)
{
    if(document.getElementById('supportReplayText').value.length < 1) { alert('لم تقم بكتابة رد!'); }
    else
    {
        document.getElementById('supportReplayButton').disabled = true;

        $.ajax({ type: "POST",
            url: "_sendSupportReplay.php",
            data: { note: document.getElementById('supportReplayText').value,
                    support_id: support_id,
                    ticket: ticket },
            success: function(results)
            {
                if(results == '1')
                {
                    $('#supportDiv').hide('slow');
                    $('#supportSent').show('slow');
                    setTimeout(function(){ location.reload(); },4000);
                }
                else
                {
                    alert("حدث خطأ! الرجاء التحقق من الاتصال بالإنترنت!");
                    document.getElementById('supportReplayButton').disabled = false;
                }
            }
           });
    }
}


function closeSupportTicket(ticket)
{
    $.ajax({ type: "POST",
        url: "_closeSupportTicket.php",
        data: { ticket: ticket },
        success: function(results)
        {
            if(results == '1')
            {
                location.reload();
            }
            else
            {
                alert("حدث خطأ! الرجاء التحقق من الاتصال بالإنترنت!");
            }
        }
       });
}


function reopenSupportTicket(ticket)
{
    $.ajax({ type: "POST",
        url: "_reopenSupportTicket.php",
        data: { ticket: ticket },
        success: function(results)
        {
            if(results == '1')
            {
                location.reload();
            }
            else
            {
                alert("حدث خطأ! الرجاء التحقق من الاتصال بالإنترنت!");
            }
        }
       });
}


function sendContact()
{
    if(document.getElementById('name').value.length < 3) { alert('الرجاء كتابة الاسم!'); }
    else if(document.getElementById('contactMethod').value.length < 4) { alert('الرجاء كتابة الجوال أو الايميل!'); }
    else if(document.getElementById('contactText').value.length < 4) { alert('الرجاء كتابة محتوى الرسالة!'); }
    else
    {
        document.getElementById('sendContactButton').disabled = true;

        $.ajax({ type: "POST",
            url: "_sendContact.php",
            data: { name: document.getElementById('name').value,
                    contactMethod: document.getElementById('contactMethod').value,
                    note: document.getElementById('contactText').value },
            success: function(results)
            {
                if(results == '1')
                {
                    $('#contactDiv').hide('slow');
                    $('#contactSent').show('slow');
                }
                else
                {
                    alert("حدث خطأ! الرجاء التحقق من الاتصال بالإنترنت!");
                    document.getElementById('sendContactButton').disabled = false;
                }
            }
           });
    }
}


function changePassword()
{
    if(document.getElementById("oldPassword").value.length < 6)
    {
        alert('كلمة المرور القديمة غير صحيحة!');
    }
    else if(document.getElementById("password1").value != document.getElementById("password2").value)
    {
        alert('كلمتا المرور الجديدتين غير متطابقة!');
    }
    else if(document.getElementById("password1").value.length < 6)
    {
        alert('كلمة المرور الجديدة يجب ألا تقل عن ٦ خانات!');
    }
    else
    {
        $.ajax({ type: "POST",
                url: "_changePassword.php",
                data: {oldPassword: document.getElementById("oldPassword").value,
                       password1: document.getElementById("password1").value,
                       password2: document.getElementById("password2").value},
                success: function(results)
                {
                    if(results == '1')
                    {
                        $("#changePasswordDiv").hide('slow');
                        $("#passwordChangedDiv").show('slow');
                        document.getElementById('oldPassword').value = '';
                        document.getElementById('password1').value = '';
                        document.getElementById('password2').value = '';
                    }
                    else if(results == '2')
                    {
                        alert('كلمتا المرور غير متطابقتين!');
                    }
                    else if(results == '3')
                    {
                        alert('كلمة المرور المدخلة غير صحيحة!');
                    }
                    else
                    {
                        alert('حدثت مشكلة.. لم يتم تغيير كلمة المرور!');
                    }
                }
               });
    }
}


function changeOrgName()
{
    if(document.getElementById('orgName').value.length < 3)
    { alert('يجب إدخال اسم المحل أو الجهة بشكل صحيح!'); }
    else
    {
        $.ajax({ type: "POST",
                url: "_changeOrgName.php",
                data: {orgName: document.getElementById("orgName").value},
                success: function(results)
                {
                    if(results == '1')
                    {
                        $("#changeOrgNameButton").hide('slow');
                        document.getElementById('orgName').disabled = true;
                    }
                    else
                    {
                        alert('حدثت مشكلة.. لم يتم تغيير كلمة المرور!');
                    }
                }
               });
    }
}


function changePersonalName()
{
    if(document.getElementById('name').value.length < 3)
    { alert('يجب إدخال الاسم!'); }
    else
    {
        $.ajax({ type: "POST",
                url: "_changePersonalName.php",
                data: {name: document.getElementById("name").value},
                success: function(results)
                {
                    if(results == '1')
                    {
                        $("#changePersonalNameButton").hide('slow');
                        document.getElementById('name').disabled = true;
                    }
                    else
                    {
                        alert('حدثت مشكلة.. لم يتم حفظ الاسم!');
                    }
                }
               });
    }
}


function changeMobile()
{
    if(document.getElementById('mobile').value.length != 10 || document.getElementById('mobile').value.substring(0,2) != '05')
    { alert('فضلا أدخل رقم الجوال بالصيغة التالية 0555123456'); }
    else
    {
        $.ajax({ type: "POST",
                url: "_changeMobile.php",
                data: {mobile: document.getElementById("mobile").value},
                success: function(results)
                {
                    if(results == '1')
                    {
                        $("#changeMobileButton").hide('slow');
                        document.getElementById('mobile').disabled = true;
                    }
                    else
                    {
                        alert('حدثت مشكلة.. لم يتم حفظ الجوال!');
                    }
                }
               });
    }
}


function changeEmail()
{
    if(document.getElementById('email').value.length < 6 ||
       document.getElementById('email').value.indexOf("@") < 1 ||
       document.getElementById('email').value.lastIndexOf(".") < 3 ||
       document.getElementById('email').value.indexOf(" ") > -1)//لمنع احتواء الايميل على مسافات
    { alert('يجب إدخال بريد إلكتروني صحيح!'); }
    else
    {
        $.ajax({ type: "POST",
                url: "_changeEmail.php",
                data: {email: document.getElementById("email").value},
                success: function(results)
                {
                    if(results == '1')
                    {
                        $("#changeEmailButton").hide('slow');
                        document.getElementById('email').disabled = true;
                    }
                    else
                    {
                        alert('حدثت مشكلة.. لم يتم حفظ الايميل!');
                    }
                }
               });
    }
}


function changeBranch()
{
    $.ajax({ type: "POST",
            url: "_changeBranch.php",
            data: {branch_id: document.getElementById('branch_id').value},
            success: function(results)
            {
                location.reload();
            }
           });
}


function showAnswersFormat(form)
{
    $('#resultsDiv').hide('slow');
    
    $.ajax({ type: "POST",
            url: "answersFormat"+form+".php",
            data: {},
            success: function(results)
            {
                document.getElementById('resultsDiv').innerHTML = results;
                $('#resultsDiv').show('slow');
            }
           });
}


function changeResultsFormat(resultsFormat)
{
    $.ajax({ type: "POST",
            url: "_changeResultsFormat.php",
            data: {resultsFormat: resultsFormat},
            success: function(results)
            {
                if(results == 'individual' || results == 'written' || results == 'statistic')
                {
                    location.reload();
                }
            }
           });
}


function changeResultsPeriod(resultsPeriod)
{
    $.ajax({ type: "POST",
            url: "_changeResultsPeriod.php",
            data: {resultsPeriod: resultsPeriod},
            success: function(results)
            {
                if(results == 'y' || results == 'm' || results == 'w' || results == 'd')
                {
                    location.reload();
                }
            }
           });
}


function changeResultsIndex(index)
{
    $.ajax({ type: "POST",
            url: "_changeResultsIndex.php",
            data: {index: index},
            success: function(results)
            {
                if(results == '1')
                {
                    location.reload();
                }
            }
           });
}


function selectPackage(thisDiv, packageID, packageName, yearlyPriceSAR, monthlyPriceSAR)
{
    var x = document.getElementsByClassName('PricePackage');
    var i;
    for (i = 0; i < x.length; i++)
    {
        x[i].style.outline = '0px solid #ffffff';
    }
    
    var selectedColor = document.getElementById('selectedColor').value;
    thisDiv.style.outline = '5px solid '+selectedColor;
    thisDiv.style.outlineOffset = '5px';
    
    var priceSAR = 0;
    var packageLong = 0;
    if(document.getElementById('payPeriod_'+packageID).value == 'monthly')
    {
        priceSAR = monthlyPriceSAR;
        packageName += ' لمدة شهر';
        packageLong = 30.5;
    }
    else
    {
        priceSAR = yearlyPriceSAR;
        packageName += ' لمدة سنة';
        packageLong = 365.25;
    }
    
    
    document.getElementById('packageID').value = packageID;
    document.getElementById('packageName').value = packageName;
    document.getElementById('packageLong').value = packageLong;
    document.getElementById('priceSAR').value = priceSAR;
    document.getElementById('yearlyPriceSAR').value = yearlyPriceSAR;
    document.getElementById('monthlyPriceSAR').value = monthlyPriceSAR;
    document.getElementById('totalPriceSAR').value = priceSAR;
    var priceUSD = getPriceInUSD(priceSAR);
    document.getElementById('priceUSD').value = priceUSD;
    document.getElementById('totalPriceUSD').value = priceUSD;
    document.getElementById('discount').value = 0;
    document.getElementById('discountCode').value = '';
    document.getElementById('discountCode_id').value = 0;
    document.getElementById('discountValue').innerHTML = 0;
    
    if(typeof(Storage) !== "undefined")
    {
        sessionStorage.setItem("tap_packageID", packageID);
        sessionStorage.setItem("tap_packageName", packageName);
        sessionStorage.setItem("tap_packageLong", packageLong);
        sessionStorage.setItem("tap_priceSAR", priceSAR);
        sessionStorage.setItem("tap_priceUSD", priceUSD);
        sessionStorage.setItem("tap_discount", 0);
        sessionStorage.setItem("tap_discountCode", "");
        sessionStorage.setItem("tap_discountCode_id", 0);
        sessionStorage.setItem("tap_totalPriceSAR", priceSAR);
        sessionStorage.setItem("tap_totalPriceUSD", priceUSD);
    }
    
    document.getElementById('packageNameInvoice').innerHTML = packageName;
    document.getElementById('packagePriceSARInvoice').innerHTML = priceSAR.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");//thousands separator
    document.getElementById('packageTotalPriceSARInvoice').innerHTML = priceSAR.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");//thousands separator    
    
    $('#checkoutDiv').show('fast');
    
    $('#discountCodeSection').hide();
    document.getElementById('couponCheck').checked = false;
    document.getElementById('discountCodeInput').value = '';
    
    $('#paymentContinueButton').show();
    $('#freeSubscriptionButton').hide();
    //$('#paypal-button-container').show('fast');
    //$('#stcPayButton').show('fast');
    //$('#bankTransferButton').show('fast');
    
    $('html,body').animate({scrollTop: document.body.scrollHeight},"slow");//النزول إلى اخر الصفحة
}


function changePayPeriod(packageID, price, monthlyPrice)
{
    if(document.getElementById('payPeriod_'+packageID).value == 'monthly')
    {
        document.getElementById('shownPriceForPackageID_'+packageID).innerHTML = monthlyPrice;
    }
    else
    {
        document.getElementById('shownPriceForPackageID_'+packageID).innerHTML = price;
    }
}


function getPriceInUSD(priceSAR)//للتحويل من الريال إلي الدولار
{
    return Math.floor(priceSAR * 0.26666667 * 100) / 100;//1 USD = 3.75 SAR
    //return Math.floor(priceSAR * 0.2592947 * 100) / 100;//paypal
}


function createInvoice(details)
{
    //document.getElementById('sp_payButton').disabled = true;
    //document.getElementById('bt_payButton').disabled = true;
    
    /*if(details != 0 && details != 1 && details != 2)
    {
        var invoiceDetails = details.id + '\n'
                         + details.payer.address.country_code + '\n'
                         + details.payer.email_address + '\n'
                         + details.payer.name.given_name + '\n'
                         + details.payer.name.surname + '\n'
                         + details.payer.payer_id + '\n'
                         + details.purchase_units[0].amount.currency_code + '\n'
                         + details.purchase_units[0].amount.value + '\n'
                         + details.purchase_units[0].shipping.address.address_line_1 + '\n'
                         + details.purchase_units[0].shipping.address.admin_area_1 + '\n'
                         + details.purchase_units[0].shipping.address.admin_area_2 + '\n'
                         + details.purchase_units[0].shipping.address.country_code + '\n'
                         + details.purchase_units[0].shipping.address.postal_code + '\n'
                         + details.purchase_units[0].shipping.name.full_name + '\n'
                         + details.status;
        
        var type = 'PayPal';
    }
    else if(details == 1)//إذا كانت العملية حوالة بنكية
    {
        if(document.getElementById('bt_toBank').value == '' ||
           document.getElementById('bt_fromBank').value == '' ||
           document.getElementById('bt_name').value == '' ||
           document.getElementById('bt_date').value == '' ||
           document.getElementById('bt_amount').value == '')
        {
            alert('يجب إكمال جميع بيانات الحوالة!');
            document.getElementById('sp_payButton').disabled = false;
            document.getElementById('bt_payButton').disabled = false;
            return;
        }
        else if(parseInt(document.getElementById('bt_amount').value) < parseInt(document.getElementById('totalPriceSAR').value))
        {
            alert('مبلغ الحوالة أقل من السعر الإجمالي!');
            document.getElementById('sp_payButton').disabled = false;
            document.getElementById('bt_payButton').disabled = false;
            return;
        }
        else
        {
            var invoiceDetails = 'Transfer to: ' + document.getElementById('bt_toBank').value + '\n'
                                + 'Transfer from: ' + document.getElementById('bt_fromBank').value + '\n'
                                + 'Name: ' + document.getElementById('bt_name').value + '\n'
                                + 'Date: ' + document.getElementById('bt_date').value + '\n'
                                + 'Amount: ' + document.getElementById('bt_amount').value;
            
            var type = 'BankTransfer';
            $('#bankTransferDiv').hide('fast');
        }
    }
    else if(details == 2)//إذا كانت العملية دفع عن طريق STC Pay
    {
        if(document.getElementById('sp_name').value == '' ||
           document.getElementById('sp_date').value == '' ||
           document.getElementById('sp_amount').value == '')
        {
            alert('يجب إكمال بيانات الدفع!');
            document.getElementById('sp_payButton').disabled = false;
            document.getElementById('bt_payButton').disabled = false;
            return;
        }
        else if(parseInt(document.getElementById('sp_amount').value) < parseInt(document.getElementById('totalPriceSAR').value))
        {
            alert('المبلغ المدفوع أقل من السعر الإجمالي!');
            document.getElementById('sp_payButton').disabled = false;
            document.getElementById('bt_payButton').disabled = false;
            return;
        }
        else
        {
            var invoiceDetails = 'Name: ' + document.getElementById('sp_name').value + '\n'
                                    + 'Date: ' + document.getElementById('sp_date').value + '\n'
                                    + 'Amount: ' + document.getElementById('sp_amount').value;

            var type = 'STC Pay';
        }
    }*/
    
    if(details != 0)
    {
        var invoiceDetails = 'Amount: ' + details.amount + '\n'
                         + 'Currency: ' + details.currency + '\n'
                         + 'Description: ' + details.description + '\n'
                         + 'Customer ID: ' + details.customer.id + '\n'
                         + 'Customer name: ' + details.customer.first_name + '\n'
                         + 'Payment method: ' + details.source.payment_method + '\n'
                         + 'Country Code: ' + details.customer.phone.country_code + '\n'
                         + 'Phone: ' + details.customer.phone.number + '\n'
                         + 'Email: ' + details.customer.email + '\n'
                         + 'Response code: ' + details.response.code + '\n'
                         + 'Response message: ' + details.response.message + '\n'
                         + 'Receipt ID: ' + details.receipt.id + '\n'
                         + 'Charge id: ' + details.id + '\n'
                         + 'Status: ' + details.status;
        
        var type = details.source.payment_method;
        
        var package_id = sessionStorage.getItem("tap_packageID");
        var sub_name = sessionStorage.getItem("tap_packageName");
        var sub_long = sessionStorage.getItem("tap_packageLong");
        var priceSAR = sessionStorage.getItem("tap_priceSAR");
        var priceUSD = sessionStorage.getItem("tap_priceUSD");
        var discount = sessionStorage.getItem("tap_discount");
        var discountCode = sessionStorage.getItem("tap_discountCode");
        var discountCode_id = sessionStorage.getItem("tap_discountCode_id");
        var totalPriceSAR = sessionStorage.getItem("tap_totalPriceSAR");
        var totalPriceUSD = sessionStorage.getItem("tap_totalPriceUSD");
    }
    else//إذا كانت العملية مخصومة بالكامل يعني مجانية
    {
        var invoiceDetails = '';
        var type = 'Free';
        
        var package_id = document.getElementById('packageID').value;
        var sub_name = document.getElementById('packageName').value;
        var sub_long = document.getElementById('packageLong').value;
        var priceSAR = document.getElementById('priceSAR').value;
        var priceUSD = document.getElementById('priceUSD').value;
        var discount = document.getElementById('discount').value;
        var discountCode = document.getElementById('discountCode').value;
        var discountCode_id = document.getElementById('discountCode_id').value;
        var totalPriceSAR = document.getElementById('totalPriceSAR').value;
        var totalPriceUSD = document.getElementById('totalPriceUSD').value;
    }
    
    
    $.ajax({ type: "POST",
            url: "_createInvoice.php",
            data: {org_id: document.getElementById('org_id').value,
                   user_id: document.getElementById('user_id').value,
                   package_id: package_id,
                   sub_name: sub_name,
                   sub_long: sub_long,
                   priceSAR: priceSAR,
                   priceUSD: priceUSD,
                   discount: discount,
                   discountCode: discountCode,
                   discountCode_id: discountCode_id,
                   totalPriceSAR: totalPriceSAR,
                   totalPriceUSD: totalPriceUSD,
                   type: type,
                   invoiceDetails: invoiceDetails},
            success: function(results)
            {
            }
           });
    
    scrollToTop();
    
    $('#checkoutDiv').hide('slow');
    $('#packagesDiv').hide('slow');
    $('#loadingDiv').show('slow');
    setTimeout(function(){
        $('#packagesDiv').load(document.URL + ' #packagesDiv');
        $('#loadingDiv').hide('slow');
        $('#paymentDone').show('slow');
        setTimeout(function(){
            $('#subscriptionStatus').hide('fast');
            $('#subscriptionStatus').load(document.URL + ' #subscriptionStatus');
            setTimeout(function(){
                $('#subscriptionStatus').show('fast');
                $('#paymentDone').hide('slow');
                $('#packagesDiv').show('slow');
            },2000);
        },3000);
    },6000);
    
    //document.getElementById('sp_payButton').disabled = false;
    //document.getElementById('bt_payButton').disabled = false;
}


function useDiscountCoupon()
{
    if(document.getElementById('discountCodeInput').value.length < 3)
    {
        $('#errorCodeMessage').show('fast');//الكود غير فعال
        setTimeout(function(){
            $('#errorCodeMessage').hide('fast');
        },4000);
    }
    else
    {
        $.ajax({ type: "POST",
            url: "_useDiscountCoupon.php",
            data: {discountCode: document.getElementById('discountCodeInput').value,
                   priceSAR: document.getElementById('priceSAR').value},
            success: function(results)
            {
                if(results == '2' || results == '3')//يعني هذا الكوبون للاستخدام مره واحده فقط وسبق استخدامه من قبل هذا العميل
                {
                   document.getElementById('errorCodeMessage').innerHTML = 'لا يمكن استخدام هذا الكود';
                   $('#errorCodeMessage').show('fast');
                    setTimeout(function(){
                        $('#errorCodeMessage').hide('fast');
                    },4000);
                }
                else if(results.length > 4)//يعني الكود صحيح
                {
                    var data = jQuery.parseJSON(results);
                    var totalPriceInUSD = getPriceInUSD(data.totalPriceSAR);
                    
                    document.getElementById('discountCode_id').value = data.couponID;
                    document.getElementById('discountCode').value = document.getElementById('discountCodeInput').value;
                    document.getElementById('discount').value = data.discount;
                    document.getElementById('totalPriceSAR').value = data.totalPriceSAR;
                    document.getElementById('totalPriceUSD').value = totalPriceInUSD;
                    
                    sessionStorage.setItem("tap_discount", data.discount);
                    sessionStorage.setItem("tap_discountCode", document.getElementById('discountCodeInput').value);
                    sessionStorage.setItem("tap_discountCode_id", data.couponID);
                    sessionStorage.setItem("tap_totalPriceSAR", data.totalPriceSAR);
                    sessionStorage.setItem("tap_totalPriceUSD", totalPriceInUSD);
                    
                    document.getElementById('discountValue').innerHTML = data.discount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");//thousands separator
                    document.getElementById('packageTotalPriceSARInvoice').innerHTML = data.totalPriceSAR.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");//thousands separator
                    
                    if(data.totalPriceSAR == 0)
                    {
                        $('#paymentContinueButton').hide();
                        $('#freeSubscriptionButton').show();
                        //$('#paypal-button-container').hide('fast');
                        //$('#stcPayButton').hide('fast');
                        //$('#stcPayDiv').hide('fast');
                        //$('#bankTransferButton').hide('fast');
                        //$('#bankTransferDiv').hide('fast');
                    }
                }
                else//الكود غير فعال
                {
                    document.getElementById('errorCodeMessage').innerHTML = 'الكود غير فعال!';
                    $('#errorCodeMessage').show('fast');
                    setTimeout(function(){
                        $('#errorCodeMessage').hide('fast');
                    },4000);
                }
            }
           });
    }
}


function deleteAnswer(customer_id)
{
    $.ajax({ type: "POST",
            url: "_deleteAnswer.php",
            data: { customer_id: customer_id },
            success: function(results)
            {
                if(results == '1')
                {
                    $('#customer_'+customer_id+'_answers').hide('slow');
                }
                else
                {
                    alert('عذرا حدث خطأ! الرجاء التأكد من الاتصال بالانترنت!');
                }
            }
           });
}


function showMoreResults1(page)
{
    document.getElementById('moreResultsDiv').innerHTML = '<img src="images/loading.gif" style="width: 50px;" />';
    
    $.ajax({ type: "POST",
        url: "answersFormat1.php",
        data: { page: page },
        success: function(results)
        {
            if(results.length > 4)
            {                    
                document.getElementById('moreResultsDiv').innerHTML = results;
                document.getElementById('moreResultsDiv').removeAttribute('id');
            }
        }
       });
}


function showMoreResults2(page, ques_id, totalAnswers)
{
    document.getElementById('moreResultsDiv_'+ques_id).innerHTML = '<img src="images/loading.gif" style="width: 50px;" />';
    
    $.ajax({ type: "POST",
        url: "_loadAnswersFormat2.php",
        data: { page: page,
                ques_id: ques_id,
                totalAnswers: totalAnswers },
        success: function(results)
        {
            if(results.length > 4)
            {                    
                document.getElementById('moreResultsDiv_'+ques_id).innerHTML = results;
                document.getElementById('moreResultsDiv_'+ques_id).removeAttribute('id');
            }
        }
       });
}


function checkPopUpMessages()
{
    $.ajax({ type: "POST",
            url: "_checkPopUpMessages.php",
            data: {},
            success: function(results)
            {
                if(results.length > 4)
                {                    
                    document.getElementById('message').innerHTML = results;
                    
                    showPopUp('PopUp', 'blackScreenPopUp');
                }
            }
           });
}


function showBadgeDetailsPopUp(name, description, picFile)
{
    $.ajax({ type: "POST",
            url: "_badgeDetailsPopUp.php",
            data: { name: name,
                    description: description,
                    picFile: picFile },
            success: function(results)
            {
                document.getElementById('badgePopUp').innerHTML = results;
                
                showPopUp('badgePopUp', 'blackScreenForBadges');
            }
           });
}


function showPopUp(PopUp_id, blackScreen_id)
{
    $('#'+PopUp_id).show();
    $('#'+blackScreen_id).show();
    
    setTimeout(function(){
        document.getElementById(PopUp_id).style.marginTop = '-50px';
        document.getElementById(blackScreen_id).style.opacity = '0.5';
    },600);
}


function hidePopUp(PopUp_id, blackScreen_id)
{
    document.getElementById(PopUp_id).style.marginTop = '-1000px';
    document.getElementById(blackScreen_id).style.opacity = '0';
    
    setTimeout(function(){
        $('#'+PopUp_id).hide();
        $('#'+blackScreen_id).hide();
        
        checkPopUpMessages();
    },600);
}


function PopUpGoToNextPage(thisPageID)
{
    var currentPageNum = thisPageID.id.replace(/\D/g,'');
    var nextPageNum = parseInt(currentPageNum) + 1;
    
    $('#page'+currentPageNum).hide('fast');
    $('#page'+nextPageNum).show('fast');
}


function TapPaymentButton(price, description, callback)
{
    if(window.navigator.onLine)//إذا كان متصل بالإنترنت
    {
        document.getElementById('paymentContinueButton').disabled = true;
        document.getElementById('paymentContinueButton').style.backgroundColor = '#9d9d9d';
        
        var org_name = document.getElementById('org_name').value;
        var user_mobile = document.getElementById('user_mobile').value.substring(1);
        var user_email = document.getElementById('user_email').value;
        
        if(org_name == '') { org_name = 'not recorded'; }
        if(user_mobile == '') { user_mobile = '555559379'; }
        if(user_email == '') { user_email = 'test@hoogastudios.com'; }
        
        goSell.config({
              containerID:"root",
              gateway:{
                //publicKey:"pk_test_9FDaLptSExVvMqs1TRhcHzNU",
                publicKey:"pk_live_52NDjReHXIsyPJQnlCEtWo9c",
                merchantId: 8002224,
                language:"ar",
                contactInfo:false,
                supportedCurrencies:["SAR"],
                supportedPaymentMethods: "all",
                saveCardOption:false,
                customerCards:false,
                notifications:'standard',
                backgroundImg: {
                  url: 'https://qaymni.com/images/tapPaymentsBG.jpg',
                  opacity: '1'
                },
                labels:{
                    cardNumber:"رقم البطاقة",
                    expirationDate:"MM/YY",
                    cvv:"الرمز CVV",
                    cardHolder:"اسم حامل البطاقة",
                    actionButton:"الدفع الآن"
                },
                style: {
                    base: {
                      color: '#535353',
                      lineHeight: '18px',
                      fontFamily: 'Tajawal',
                      fontSmoothing: 'antialiased',
                      fontSize: '16px',
                      '::placeholder': {
                        color: 'rgba(0, 0, 0, 0.26)',
                        fontSize:'15px'
                      }
                    },
                    invalid: {
                      color: 'red',
                      iconColor: '#fa755a'
                    }
                }
              },
              customer:{
                id: null,
                first_name: org_name,
                middle_name: "",
                last_name: "",
                email: user_email,
                phone: {
                    country_code: "966",
                    number: user_mobile
                }
              },
              order:{
                amount: price,
                currency: "SAR",
                shipping: null,
                taxes: null
              },
             transaction:{
               mode: 'charge',
               charge:{
                  saveCard: false,
                  threeDSecure: true,
                  description: description,
                  statement_descriptor: "Sample",
                  reference:{
                    transaction: "txn_0001",
                    order: "ord_0001"
                  },
                  metadata:{},
                  receipt:{
                    email: false,
                    sms: false
                  },
                  redirect: window.location.href,
                  post: window.location.href,
                }
             }
            });
        
        callback();
    }
    else
    {
        alert('الرجاء التحقق من الاتصال بالانترنت!');
    }
}


function callback_function()
{
    //لمعرفة إذا كان المتصفح سفاري لإظهار خيار أبل باي
    //var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && window['safari'].pushNotification));
    
    setTimeout(function(){
        goSell.openPaymentPage();
    },1000);
    
    //للتأكيد إذا لم تعمل الأولى بسبب بطئ استجابة النت
    setTimeout(function(){
        goSell.openPaymentPage();
    },5000);
    
    
    /*setTimeout(function(){
        if(isSafari)
        {
            goSell.openPaymentPage();
        }
        else
        {
            goSell.openLightBox();
        }
    },1000);
    
    //للتأكيد إذا لم تعمل الأولى بسبب بطئ استجابة النت
    setTimeout(function(){
        if(isSafari)
        {
            goSell.openPaymentPage();
        }
        else
        {
            goSell.openLightBox();
        }
    },5000);*/
}


function getOrgQuestions(org_id)
{
    /*var x = document.getElementsByClassName('viewOrgQuestions');
    var i;
    
    for(i=0 ; i<x.length ; i++)
    {
        x[i].style.display = 'none';
    }*/
    if(document.getElementById('viewOrgQuestions_'+org_id).style.display == 'none')
    {
        $('#viewOrgQuestions_'+org_id).show('fast');
        
        $.ajax({ type: "POST",
                url: "_getOrgQuestions.php",
                data: { org_id: org_id },
                success: function(results)
                {
                    document.getElementById('viewOrgQuestions_'+org_id).innerHTML = results;
                    //$('#viewOrgQuestions_'+org_id).show('fast');
                }
               });
    }
    else
    {
        $('#viewOrgQuestions_'+org_id).hide('fast');
    }
}


function visitOrgFromDashboard(org_id, orgName, orgCode)
{
    $.ajax({ type: "POST",
            url: "_visitOrgFromDashboard.php",
            data: { org_id: org_id,
                    orgName: orgName,
                    orgCode: orgCode },
            success: function(results)
            {
                if(results == '1')
                {
                    window.location = '../myAccount.php';
                }
            }
           });
}