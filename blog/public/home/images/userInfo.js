//��ȡ������Ϊ
$.ajax({
    type: "GET",
    url : "/user/userinfo/getUserCredit.action",
    timeout: 3000,
    success: function (result) {
        $("#userCredit").addClass("rank-sh rank-sh0"+result);
    }
});

$("#nickName").focus(function() {
	$("#nickName_msg").parent().removeClass("prompt-error");
	$("#nickName_msg").parent().addClass("prompt-06");
});

//У��petName�Ƿ���ȷ
$("#nickName").blur(function() {
	var nickName = $("#nickName").val();
	nickName=$.trim(nickName);
	$("#nickName").val(nickName);
	if (!validNickname(nickName)) {
		return;
	}
    checkNickName(nickName);
});

$("#realName").focus(function() {
	$("#realName_msg").parent().removeClass("prompt-error");
	$("#realName_msg").parent().addClass("prompt-06");
	$("#realName_msg").html("��������ʵ������20��Ӣ�Ļ�10������");
	$("#realName").attr("class","itxt");
});

$("#realName").blur(function() {
	var realName = $("#realName").val();
	realName =  $.trim(realName);
	$("#realName").val(realName);
	if (!validRealname(realName)) {
		return;
	}
});


$("#address").blur(function() {
	delspace("address"); //����ȥ���ո�
	var addr = $("#address").val();
	// �ж��Ƿ�Ϊ��
	if (addr.replace(/[^\x00-\xff]/g, "**").length > 120) {
		$("#address_msg").parent().addClass("prompt-error");
		$("#address_msg").parent().removeClass("prompt-06");
		$("#address_msg").html("���ȳ���");
	} else {
		$("#address_msg").html("");
	}
});


/**
 * ��ַ����
 * @param address
 */
function validAddress(address){
	delspace("address");
    if (address == null || address == "") {
    }else if(address.replace(/[^\x00-\xff]/g, "**").length > 120) {
		$("#address_msg").parent().addClass("prompt-error");
		$("#address_msg").parent().removeClass("prompt-06");
		$("#address_msg").html("���ȳ���");
		return false;
    }
    return true;
}


// �ύ�û�������Ϣ�޸�
function updateUserInfo() {
    var nickName=$("#nickName").val();
    var realName=$("#realName").val();
    var sex=$("input[name=sex]:checked").val();
    var birthday=$("#birthdayYear").val() + "-" + $("#birthdayMonth").val() + "-" + $("#birthdayDay").val();
    var province=$("#province").val();
    var city=$("#city").val();
    var county=$("#county").val();
    var address=$("#address").val();
    var code=$("#code").val();
    var rkey=$("#rkey").val();
    var newAliasName =$.trim($("#aliasName").val());
    var oldAliasName = $("#hiddenAliasName").val();
    if(newAliasName != oldAliasName){
        if ( !$("#aliasArea").is(":hidden") && !validAliasName(newAliasName)) {
            scroller("aliasName", 200);
            return;
        }
    }
    if (!validNickname(nickName)) {
        scroller("nickName", 200);
        return;
    }
    if(sex==null||sex==""){
        alert("��ѡ���Ա�");
        return;
    }
    if(!validRealname(realName)){
        scroller("realName", 200);
        return;
    }
    var hobby="";
    $(".hobul").children().each(function(){
        if($(this).attr("class")=="selected"){
        	hobby+=$(this).val()+",";
        }
    });

    var datas = "1=1";
    datas += "&userVo.nickName=" + encodeURI(encodeURI(nickName));
    datas += "&userVo.realName=" + encodeURI(encodeURI(realName));
    datas += "&userVo.sex=" + sex;
    datas += "&userVo.birthday=" + birthday;
    datas += "&userVo.hobby=" + hobby;
    datas += "&userVo.code=" + code;
   ; datas += "&userVo.rkey=" + rkey;
    if(newAliasName != $.trim(oldAliasName)){
        datas += "&newAliasName=" + encodeURI(encodeURI(newAliasName));
    }
    jQuery.ajax({
        type : "post",
        url : "/user/userinfo/updateUserInfo.action",
        data : datas,
        timeout: 10000,
        success : function(html) {
            if (html=="2") {
                //$("#hiddenAliasName").val(newAliasName);
                //var _aliasName = "<strong >"+newAliasName+"</strong>" +
                //    "<a href='javascript:void(0)' class='ftx-05 ml10' onclick='changeAliasName()' clstag='pageclick|keycount|201602251|1'>�޸�</a>" +
                //    "<span class='ftx03'>�����ڵ�¼�����μ�Ŷ~</span>"
                //$("#_aliasName").html(_aliasName);
                //$("#aliasName").val(newAliasName);
                //$("#aliasBefore").show();
                //$("#aliasAfter").hide();
                newBox();
                setTimeout("window.location.reload()", 3000);
               // setTimeout("", 3000);
            } else if(html == "nicknameUsed"){
            	$("#nickName_msg").parent().addClass("prompt-error");
				$("#nickName_msg").parent().removeClass("prompt-06");
				$("#nickName_msg").html("���ǳ��ѱ������û���ע�����޸�");
				$("#nickName").attr("class","itxt itxt-error");
				scroller("nickName", 200);
            } else if(html == "aliasnameUsed"){
                $("#aliasName_msg").parent().addClass("prompt-error");
                $("#aliasName_msg").parent().removeClass("prompt-06");
                $("#aliasName_msg").html("�˵�¼���ѱ������û���ע�����޸�");
                $("#aliasName").attr("class","itxt itxt-error");
                scroller("aliasName", 200);
            }else if(html == "threeMore"){
                $("#aliasName_msg").parent().addClass("prompt-error");
                $("#aliasName_msg").parent().removeClass("prompt-06");
                $("#aliasName_msg").html("�������ѳ����޸Ĵ������ƣ���24Сʱ������");
                $("#aliasName").attr("class","itxt itxt-error");
            scroller("aliasName", 200);
        }
            else if(html != "1"){
            	newBoxSensitiveWord(html);
            	setTimeout("jdThickBoxclose()", 3000);
            }else {
                alert("����ʧ�ܣ����Ժ�����...");
            }
        }
    });
}


function newBox() {
    jQuery.jdThickBox({
        type: "text",
        title: "��ʾ",
        width: 300,
        height:80,
        source: "<div class=\"tip-box icon-box\"><span class=\"succ-icon m-icon\"></span><div class=\"item-fore\"><h3 class=\"ftx02\">���ϱ���ɹ�</h3><div class=\"op-btns\"><a href=\"javascript:void(0)\" class=\"btn-9\" onclick=\"window.location.reload()\">�ر�</a></div></div></div>",
        _autoReposi: true
    });
}

function newBoxSensitiveWord(sensitiveWord) {
	jQuery.jdThickBox({
		type: "text",
		title: "��ʾ",
		width: 300,
		height:150,
		source: "<div class=\"tip-box icon-box\"><span class=\"warn-icon m-icon\"></span><div class=\"item-fore\"><h3 class=\"ftx-04\"> �����к������δ�  \""+sensitiveWord+"\" ��������д</h3><div class=\"op-btns\"><a href=\"javascript:void(0)\" class=\"btn-9\" onclick=\"jdThickBoxclose()\">�ر�</a></div></div></div>",
		_autoReposi: true
	});
}

/**
 * �ǳƹ���
 * @param nickname
 */
function validNickname(nickName){
    if (nickName == "") {
        $("#nickName_msg").parent().addClass("prompt-error");
        $("#nickName_msg").parent().removeClass("prompt-06");
        $("#nickName").attr("class","itxt itxt-error");
        $("#nickName_msg").html("�������ǳ�");
        return false;
    }
    var reg = new RegExp("^([a-zA-Z0-9_-]|[\\u4E00-\\u9FFF])+$", "g");
    var reg_number = /^[0-9]+$/; // �ж��Ƿ�Ϊ���ֵ�������ʽ
    if (reg_number.test(nickName)) {
        $("#nickName_msg").parent().addClass("prompt-error");
        $("#nickName_msg").parent().removeClass("prompt-06");
        $("#nickName_msg").html("�ǳƲ�������Ϊ�ֻ��ŵȴ����ָ�ʽ����������Ŷ^^");
        $("#nickName").attr("class","itxt itxt-error");
        return false;
    } else if (nickName.replace(/[^\x00-\xff]/g, "**").length < 4 || nickName.replace(/[^\x00-\xff]/g, "**").length > 20) {
        $("#nickName_msg").parent().addClass("prompt-error");
        $("#nickName_msg").parent().removeClass("prompt-06");
        $("#nickName_msg").html("4-20���ַ���������Ӣ�ġ����֡���_������-�����");
        $("#nickName").attr("class","itxt itxt-error");
        return false;
    } else if (!reg.test(nickName)) {
        $("#nickName_msg").parent().addClass("prompt-error");
        $("#nickName_msg").parent().removeClass("prompt-06");
        $("#nickName_msg").html("�ǳƸ�ʽ����ȷ");
        $("#nickName").attr("class","itxt itxt-error");
        return false;
    }
    return true;
}

/**
 * ��ʵ��������
 * @param realName
 */
function validRealname(realName){
    var uname_ = replaceChar(realName, "��"); // ȥ�������еġ�
    var reg = new RegExp("^([a-zA-Z]|[\\u4E00-\\u9FFF])+$", "g");
    if (realName == null || realName == "") {
        $("#realName").addClass("red");
        $("#realName_msg").parent().addClass("prompt-error");
        $("#realName_msg").parent().removeClass("prompt-06");
        $("#realName_msg").html("��ʵ��������Ϊ��");
        $("#realName").attr("class","itxt itxt-error");
        return false;
    } else if (realName.indexOf("����") != -1) {
        // �����в����������������
        $("#realName").addClass("red");
        $("#realName_msg").parent().addClass("prompt-error");
        $("#realName_msg").parent().removeClass("prompt-06");
        $("#realName_msg").html("��ʵ�����в����������������");
        $("#realName").attr("class","itxt itxt-error");
        return false;
    } else if (realName.substring(0, 1) == "��" || realName.substring(realName.length - 1) == "��") {
        // ����ǰ���ܼӡ�
        $("#realName_msg").parent().addClass("prompt-error");
        $("#realName_msg").parent().removeClass("prompt-06");
        $("#realName_msg").html("��ʵ����ǰ���ܼӡ�");
        $("#realName").attr("class","itxt itxt-error");
        return false;
    } else if (!reg.test(uname_)) {
        $("#realName_msg").parent().addClass("prompt-error");
        $("#realName_msg").parent().removeClass("prompt-06");
        $("#realName_msg").html("��ʵ�����а��������Ϲ淶���ַ�");
        $("#realName").attr("class","itxt itxt-error");
        return false;
    } else if (realName.replace(/[^\x00-\xff]/g, "**").length < 4 || realName.replace(/[^\x00-\xff]/g, "**").length > 20) {
    	 $("#realName_msg").parent().addClass("prompt-error");
         $("#realName_msg").parent().removeClass("prompt-06");
         $("#realName_msg").html("��������ʵ������Ӣ�ĳ���:4-20   ���ĳ���:2-10");
         $("#realName").attr("class","itxt itxt-error");
        return false;
    }
    $("#realName").attr("class","itxt itxt-succ");
    $("#realName_msg").html("");
    return true;
}

function checkNickName(nickName) {
	$("#nickName_msg").html("�ǳ�Ψһ����֤�У����Ե�...");
	jQuery.ajax({
		type: "GET",
		url : "/user/petName/checkPetName.action?callback=?",
		data : "petNewName=" + encodeURI(encodeURI(nickName)),
	    dataType: "jsonp",
	    timeout: 6000,
		success : function(obj) {
			if ("0" == obj.type) {
				$("#nickName_msg").parent().removeClass("prompt-error");
				$("#nickName_msg").parent().addClass("prompt-06");
				$("#nickName_msg").html("");
				$("#nickName").attr("class","itxt itxt-succ");
			}
			else if ("1" == obj.type) {
				$("#nickName_msg").parent().addClass("prompt-error");
				$("#nickName_msg").parent().removeClass("prompt-06");
				$("#nickName_msg").html("���ǳ��ѱ������û���ע�����޸�");
				$("#nickName").attr("class","itxt itxt-error");
			}else{
				$("#nickName_msg").parent().addClass("prompt-error");
				$("#nickName_msg").parent().removeClass("prompt-06");
				$("#nickName_msg").html("�����к������δ�  \""+obj.type+"\" ��������д");
				$("#nickName").attr("class","itxt itxt-error");
			}
		},
		error: function(){
	    	alert("�����쳣�����Ժ����ԣ�");
	    }
	});
}


// deal userName
$("#aliasName").focus(function() {
    $("#aliasName_msg").parent().removeClass("prompt-error");
    $("#aliasName_msg").parent().addClass("prompt-06");
    $("#aliasName_msg").html("֧�����ġ���ĸ�����֡���-������_�����ּ����ϵ���ϣ�4-20���ַ�");
    $("#aliasName").attr("class","itxt");
});

//У������Ƿ���ȷ
$("#aliasName").blur(function() {
    var aliasName = $.trim($("#aliasName").val());
    var oldAliasName = $("#hiddenAliasName").val();
    $("#aliasName").val(aliasName);
   if(oldAliasName == aliasName){
       $("#aliasName_msg").parent().removeClass("prompt-error");
       $("#aliasName_msg").parent().addClass("prompt-06");
       $("#aliasName_msg").html("");
       $("#aliasName").attr("class","itxt itxt-succ");
       return;
   }
    if (!validAliasName(aliasName)) {
        return;
    }
    checkAliasName(aliasName);
});

/**
 * ����У�����
 */
/**
 * �ǳƹ���
 * @param aliasName
 */
function validAliasName(aliasName){
    if (aliasName == "") {
        $("#aliasName_msg").parent().addClass("prompt-error");
        $("#aliasName_msg").parent().removeClass("prompt-06");
        $("#aliasName").attr("class","itxt itxt-error");
        $("#aliasName_msg").html("�������¼��");
        return false;
    }
    var reg = new RegExp("^([a-zA-Z0-9_-]|[\\u4E00-\\u9FFF])+$", "g");
    var reg_number = /^[0-9]+$/; // �ж��Ƿ�Ϊ���ֵ�������ʽ
    if (reg_number.test(aliasName)) {
        $("#aliasName_msg").parent().addClass("prompt-error");
        $("#aliasName_msg").parent().removeClass("prompt-06");
        $("#aliasName_msg").html("��¼����������Ϊ�ֻ��ŵȴ����ָ�ʽ����������Ŷ^^");
        $("#aliasName").attr("class","itxt itxt-error");
        return false;
    } else if (aliasName.replace(/[^\x00-\xff]/g, "**").length < 4 || aliasName.replace(/[^\x00-\xff]/g, "**").length > 20) {
        $("#aliasName_msg").parent().addClass("prompt-error");
        $("#aliasName_msg").parent().removeClass("prompt-06");
        $("#aliasName_msg").html("����ֻ����4-20���ַ�֮��");
        $("#aliasName").attr("class","itxt itxt-error");
        return false;
    } else if (!reg.test(aliasName)) {
        $("#aliasName_msg").parent().addClass("prompt-error");
        $("#aliasName_msg").parent().removeClass("prompt-06");
        $("#aliasName_msg").html("֧�����ġ���ĸ�����֡���-������_�����ּ����ϵ���ϣ�4-20���ַ�");
        $("#aliasName").attr("class","itxt itxt-error");
        return false;
    }
    return true;
}

function checkAliasName(aliasName) {
    $("#aliasName_msg").html("��¼��Ψһ����֤�У����Ե�...");
    jQuery.ajax({
            type: "GET",
            url : "/user/petName/checkAliasName.action?callback=?",
            data : "aliasNewName=" + encodeURI(encodeURI(aliasName)),
            dataType: "jsonp",
        timeout: 6000,
        success : function(obj) {
            if ("0" == obj.type) {
                $("#aliasName_msg").parent().removeClass("prompt-error");
                $("#aliasName_msg").parent().addClass("prompt-06");
                $("#aliasName_msg").html("");
                $("#aliasName").attr("class","itxt itxt-succ");
            } else if ("3" == obj.type) {
                $("#aliasName_msg").parent().addClass("prompt-error");
                $("#aliasName_msg").parent().removeClass("prompt-06");
                if (obj.moreAlias != null && obj.moreAlias.length > 0) {
                        var html = "<dl class='recommend-names;'>";
                            html += "<dt>��ע�ᣬ�Ƽ���ʹ��</dt>";
                    for (var i = 0; i < obj.moreAlias.length; i++) {
                        html+=" <dd><input name='moreAliasRadio' onclick='selectMe(this);' type='radio' class ='radio' value ='"+obj.moreAlias[i]+"'><span>"+ obj.moreAlias[i] +"</span></dd>";
                    }
                    html+="</dl>";
                    $("#aliasName_msg").html(html);
                }else{
                           $("#aliasName_msg").html("�˵�¼���ѱ������û���ע�����޸�");
                    }
                $("#aliasName").attr("class","itxt itxt-error");
            }else {
                $("#aliasName_msg").parent().addClass("prompt-error");
                $("#aliasName_msg").parent().removeClass("prompt-06");
                $("#aliasName_msg").html("�����к������δ�  \""+obj.type+"\" ��������д");
                $("#aliasName").attr("class","itxt itxt-error");
            }
        },
        error: function(){
            alert("�����쳣�����Ժ����ԣ�");
        }
    });
}
/**
 * ѡ���û���
 * @param option
 */
function selectMe(option) {
    $("#aliasName_msg").parent().removeClass("prompt-error");
    $("#aliasName_msg").parent().addClass("prompt-06");
    $("#aliasName_msg").html("");
    $("#aliasName").attr("class","itxt itxt-succ");
    $("#aliasName").val(option.value);
}
/**
 * �޸��û�����
 */
function changeAliasName(){
    jQuery.ajax({
        type : "post",
        url : "/user/userinfo/checkMobileUser.action",
        timeout: 10000,
        success : function(html) {
            if (html=="1") {
               //�����ֻ� ���Խ����޸�
                $("#aliasBefore").hide();
                $("#aliasAfter").show();
                var _aliasName =$.trim($("#aliasName").val());
                $("#aliasName").focus().val(_aliasName);
            } else if(html == "0"){
               //δ���ֻ�  ��ʾ��Ҫ���ֻ�
            $("#aliasNameBefore_msg").parent().addClass("prompt-error");
            $("#aliasNameBefore_msg").parent().removeClass("prompt-06");
            var html = "<span id='aliasNameBefore_msg'>��¼����ʱ�޷��޸�</span><a class='ftx-05 ml10' target='_blank' href='https://safe.jd.com/validate/verifyMobile' clstag='pageclick|keycount|201602251|2'>����֤�ֻ�����</a>"
            $("#aliasNameBefore_msg").html(html);
            $("#aliasName").attr("class","itxt itxt-error");
}
}
});
}

