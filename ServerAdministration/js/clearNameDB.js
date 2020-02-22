var clearNameDB = function () {
	var wrongDataBaseName = document.getElementById("searchDB").value;
	var replacingDB= wrongDataBaseName,
		nameDB;
	nameDB=replacingDB.replace(/[ =+'"ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç]/g,'');
	var nuevo;
	nuevo=document.getElementById("searchDB").value=nameDB;
	console.log(nuevo);
}