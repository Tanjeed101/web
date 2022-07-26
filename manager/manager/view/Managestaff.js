

var selectedRow = null;
function onFormSubmit(e){
    event.preventDefault();
    var formData = readFormData();
    if(selectedRow === null){
        insertNewRecord(formData);
    }
    else{
        updateRecord(formData);
    }
    resetForm();
}

//Retrieve the data
function readFormData(){
    var formData = {};
    formData["SID"] = document.getElementById("SID").value;
    formData["Sname"] = document.getElementById("Sname").value;
    formData["DOB"] = document.getElementById("DOB").value;
    formData["Salary"] = document.getElementById("Salary").value;
    return formData;
}

//Insert the data
function insertNewRecord(data){
    var table = document.getElementById("storeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    var cell1 = newRow.insertCell(0);
        cell1.innerHTML = data.SID;
    var cell2 = newRow.insertCell(1);
        cell2.innerHTML = data.Sname;
    var cell3 = newRow.insertCell(2);
        cell3.innerHTML = data.DOB;
    var cell4 = newRow.insertCell(3);
        cell4.innerHTML = data.Salary;
    var cell5 = newRow.insertCell(4);
        cell5.innerHTML = `<button onClick='onEdit(this)'>Edit</button> <button onClick='onDelete(this)'>Delete</button>`
}

//Edit the data
function onEdit(td){
    selectedRow = td.parentElement.parentElement;
    document.getElementById('SID').value = selectedRow.cells[0].innerHTML;
    document.getElementById('Sname').value = selectedRow.cells[1].innerHTML;
    document.getElementById('DOB').value = selectedRow.cells[2].innerHTML;
    document.getElementById('Salary').value = selectedRow.cells[3].innerHTML;
}

function updateRecord(formData){
    selectedRow.cells[0].innerHTML = formData.SID;
    selectedRow.cells[1].innerHTML = formData.Sname;
    selectedRow.cells[2].innerHTML = formData.DOB;
    selectedRow.cells[3].innerHTML = formData.Salary;
}

//Delete the data
function onDelete(td){
    if(confirm('Do you want to delete this record?')){
        row = td.parentElement.parentElement;
        document.getElementById('storeList').deleteRow(row.rowIndex);
    }
    resetForm();
}

//Reset the data
function resetForm(){
    document.getElementById('SID').value = '';
    document.getElementById('Sname').value = '';
    document.getElementById('DOB').value = '';
    document.getElementById('Salary').value = '';
}