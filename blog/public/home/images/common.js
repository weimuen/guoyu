/**
 * show birthday
 */
var nowdate = new Date(); // ��ȡ��ǰʱ������
var nowYear = nowdate.getFullYear();// ��ǰ���
var nowMonth = nowdate.getMonth() + 1;// ��ǰ�·�
// �����ݡ��·ݵ������� �����������ѡ��
$("#birthdayYear").empty();
$("#birthdayMonth").empty();

// ����Ϊ����ֶ� ���ѡ��
$("<option value='0' disabled='' selected='selected'>��ѡ��</option>").appendTo(
		"#birthdayYear");
for (var startYear = nowYear; startYear >= 1930; startYear--) {
	var year;
	if ((startYear + 11) % 10 == 0) { // ģ�����
		year = (startYear - 9 + "").substring(2);
		$("<option value='" + year + "��'>" + year + "��</option>").appendTo(
				"#birthdayYear");
	}
	$("<option value='" + startYear + "'>" + startYear + "</option>").appendTo(
			"#birthdayYear");
}
$("<option value='0' disabled='' selected='selected'>��ѡ��</option>").appendTo(
		"#birthdayMonth");
for (var startMonth = 1; startMonth <= 12; startMonth++) {
	$("<option value='" + startMonth + "'>" + startMonth + "</option>")
			.appendTo("#birthdayMonth");
}
$("<option value='0' disabled='' selected='selected'>��ѡ��</option>").appendTo(
		"#birthdayDay");
if (originalBirthdayYear == null || originalBirthdayYear == ""
		|| originalBirthdayYear == "1") {
	$("#birthdayYear").val(0);
	$("#birthdayMonth").val(0);
	$("#birthdayDay").val(0);
} else {
	$("#birthdayYear").val(originalBirthdayYear);
	$("#birthdayMonth").val(originalBirthdayMonth);
	changeSelectBrithdayDay();
	// setTimeout(function() {$("#birthdayDay").val(originalBirthdayMonth);},
	// 1);
}

// ѡ��������ݺ󴥷�
$("#birthdayYear").change(function() {
	changeSelectBrithdayDay();
});

// ѡ�������·ݺ󴥷�
$("#birthdayMonth").change(function() {
	changeSelectBrithdayDay();
});

// ������ѡ�����ݡ��·ݼ������������,��������������������е�������
function changeSelectBrithdayDay() {

	var maxNum;
	var month = $("#birthdayMonth").val();
	var year = $("#birthdayYear").val();
	if (year == 0) { // ������û��ѡ�����������������(����2004��Ϊ����)
		year = 2004;
	}
	if (month == 0) {
		maxNum = 31;
	} else if (month == 2) {
		if (year.toString().substring(2) == "��") { // �ж�����Ƿ�Ϊģ�����
													// �����ģ�������������Ϊ29
			maxNum = 29;
		} else {
			if (year % 400 == 0 || (year % 4 == 0 && year % 100 != 0)) { // �ж�����
				maxNum = 29;
			} else {
				maxNum = 28;
			}
		}
	} else if (month == 4 || month == 6 || month == 9 || month == 11) {
		maxNum = 30;
	} else {
		maxNum = 31;
	}

	// ������ڵ������� �����������ѡ��
	$("#birthdayDay").empty();
	if (month == 0) {
		$("<option value='0' disabled='' selected='selected'>��ѡ��</option>")
				.appendTo("#birthdayDay");
	} else {
		for (var startDay = 1; startDay <= maxNum; startDay++) {
			$("<option value='" + startDay + "'>" + startDay + "</option>")
					.appendTo("#birthdayDay");
		}
		if (maxNum >= originalBirthdayDay) {
			setTimeout(function() {
				$("#birthdayDay").val(originalBirthdayDay);
			}, 1);
			// $("#birthdayDay").val(originalBirthdayDay);//���õ�ǰ���Ϊ��ѡ
		} else {
			setTimeout(function() {
				$("#birthdayDay").val(1);
			}, 1);
			// $("#birthdayDay").val(1);//���õ�ǰ���Ϊ��ѡ
			originalBirthdayDay = 1;
		}
	}
}

/**
 * ��������
 */
$("#province").attr("value", originalProvince);// ���õ�ǰʡ��
var initValue = 0;

$("#province").change(
		function() {
			if ($("#province").val() == -1) {
				$("#city").show();
				$("#county").show();
				$("#city").empty(); // �������ѡ��
				$("#county").empty(); // �������ѡ��
				return;
			}
			jQuery.ajax({
				type : "post",
				url : "/user/userinfo/queryAreaList.action",
				data : "areaId=" + $("#province").val(),
				success : function(html) {
					$("#city").empty(); // �������ѡ��
					var areaInfos = html.split(";");
					for (var i = 0; i < areaInfos.length - 1; i++) {
						var info = areaInfos[i].split(":");
						$(
								"<option value='" + info[0] + "'>" + info[1]
										+ "</option>").appendTo("#city");
					}
					if (areaInfos.length > 1) {
						if (initValue == 0) {
							$("#city").attr("value", originalCity);// ���õ�ǰʡ��
						}
					}
					$("#city").change(); // ��������������

				},
				error : function(data) {
					// alert("���紫���쳣���޷���ȡ������Ϣ");
				}
			});

		});
$("#city").change(
		function() {
			if ($("#city").val() == -1) {
				$("#county").show();
				$("#county").empty(); // �������ѡ��
				// $("<option value='-1'>��ѡ��λ��</option>").appendTo("#county");
				return;
			}
			var nowProvName = $("#province").find("option:selected").text();
			if (nowProvName == "���" || nowProvName == "����"
					|| nowProvName == "̨��" || nowProvName == "����") {
				$("#city").show();
				$("#city").hide();
			} else if (nowProvName == "����" || nowProvName == "���") {
				$("#city").show();
				$("#city").hide();
			} else {
				$("#city").show();
			}
			jQuery.ajax({
				type : "post",
				url : '/user/userinfo/queryAreaList.action',
				data : "areaId=" + $("#city").val(),
				success : function(html) {
					$("#county").empty(); // �������ѡ��
					var areaInfos = html.split(";");
					for (var i = 0; i < areaInfos.length - 1; i++) {
						var info = areaInfos[i].split(":");
						$(
								"<option value='" + info[0] + "'>" + info[1]
										+ "</option>").appendTo("#county");
					}
					if (areaInfos.length > 1) {
						if (initValue == 0) {
							$("#county").attr("value", originalCounty);// ���õ�ǰʡ��
							initValue = 1;
						}
					}
					$("#county").change(); // ���õ���������
				},
				error : function(data) {
					// alert("���紫���쳣���޷���ȡ������Ϣ");
				}
			});

		});
$("#county").change(
		function() {
			var nowProvName = $("#province").find("option:selected").text();
			if (nowProvName == "���" || nowProvName == "����"
					|| nowProvName == "̨��" || nowProvName == "����") {
				$("#county").show();
				$("#county").hide();
			} else if (nowProvName == "����" || nowProvName == "���") {
				$("#county").show();
				$("#county").show();
			} else {
				$("#county").show();
			}
			$("#city_msg").html("");
		});

$("#province").change(); // ��������������

// ȥ���ո� ����ȥ���ո����ַ��������ʾ
function delspace(name) {
	var inputValue = $("#" + name).val();
	while (inputValue.indexOf(" ") != -1) {
		inputValue = inputValue.replace(" ", "");
	}
	$("#" + name).val(inputValue);
}

// ȥ�����Ҽ����� ����ȥ���ո����ַ��������ʾ
function replaceBrackets(name) {
	var inputValue = $(name).val();
	while (inputValue.indexOf("<") != -1) {
		inputValue = inputValue.replace("<", "[");
	}
	while (inputValue.indexOf(">") != -1) {
		inputValue = inputValue.replace(">", "]");
	}
	while (inputValue.indexOf("&") != -1) {
		inputValue = inputValue.replace("&", " ");
	}
	$(name).val(inputValue);
}

// ȥ��ĳ���ַ� �������Ժ�����֤������ʽ���ж�Ӱ�죩
function replaceChar(name, char) {
	var inputValue = name;
	while (inputValue.indexOf(char) != -1) { // ȥ��-Ӱ��
		inputValue = inputValue.replace(char, "");
	}
	return inputValue;
}