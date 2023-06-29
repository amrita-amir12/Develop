var selectedRow = null;

getAllData()
function onFormsubmit(){
    var formdata =readformdata();
    if(selectedRow == null)
    insertnewRecord  (formdata);
else
    updaterecord(formdata);
resetform();
}

function getAllData(){
    $.ajax({
        url: 'http:/localhost:3000/api/student/', type: 'get',
        contentType: 'application/json', dataType: "json",
        success:
        function (data, textStatus, jQxhr) {
        let text = "<ul>";
        for (let i = 0; i < data.length; i++) {
        text += "<li>" + data[i].StudentId + " " + data[i].FirstName + " " + data[i].LastName + "</li>"; }
        text += "</ul>"; 
        document.getElementById("demo").innerHTML = text; },
        error: function (jqXhr, textStatus, errorThrown) {
        console.log(errorThrown); } });
}

function readformdata(){
    var  formdata ={};
    formdata["Fullname"]=document.getElementById("Fullname").value;
    formdata["SID"]=document.getElementById("SID").value;
    formdata["StudentCenter"]=document.getElementById("StudentCenter").value;
    formdata["Semester"]=document.getElementById("Semester").value;
    formdata["CGPA"]=document.getElementById("CGPA").value;
    return formdata;
}
function insertnewRecord(data){
    var table  =document.getElementById("studentlist").getElementsByTagName('tbody')[0];
    var  newRow = table.insertRow(table.length);
    cell1=newRow.insertCell(0);
    cell1.innerHTML = data.Fullname;
    cell2=newRow.insertCell(1);
    cell2.innerHTML = data.SID;
    cell3=newRow.insertCell(2);
    cell3.innerHTML = data.StudentCenter;
    cell4=newRow.insertCell(3);
    cell4.innerHTML = data.Semester;
    cell5=newRow.insertCell(4);
    cell5.innerHTML = data.CGPA;
    cell6=newRow.insertCell(5)
    cell6.innerHTML=`<a onClick="onedit(this)" >Edit</a>
                    <a onClick="onDelete(this)">Delete</a>`
}
function resetform( ) {
    document.getElementById("Fullname").value ="";
    document.getElementById("SID").value ="";
    document.getElementById("StudentCenter").value ="";
    document.getElementById("Semester").value ="";
    document.getElementById("CGPA").value ="";
    selectedRow = null;
}
function onedit(td){
    selectedRow=td.parentElement.parentElement;
    document.getElementById("Fullname").value =  selectedRow.cells[0].innerHTML;
    document.getElementById("SID").value =  selectedRow.cells[1].innerHTML;
    document.getElementById("StudentCenter").value =  selectedRow.cells[2].innerHTML;
    document.getElementById("Semester").value =  selectedRow.cells[3].innerHTML;
    document.getElementById("CGPA").value =  selectedRow.cells[4].innerHTML;
}
function updaterecord(formdata){
    selectedRow.cells[0].innerHTML =formdata.Fullname;
    selectedRow.cells[1].innerHTML =formdata.SID;
    selectedRow.cells[2].innerHTML =formdata.StudentCenter;
    selectedRow.cells[3].innerHTML =formdata.Semester;
    selectedRow.cells[4].innerHTML =formdata.CGPA;

}
function  onDelete(td){
    if (confirm('Are you sureto delete this record ?')){
    row = td.parentElement.parentElement;
    document.getElementById("studentlist").deleteRow(row.rowIndex); 
    resetform();

    }
}



