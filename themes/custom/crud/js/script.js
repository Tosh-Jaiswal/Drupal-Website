var selectedRow = null
var uid = 0
var nameArray = []

function formDisplay(){
    if(uid != 0)
        document.getElementById("data").style.display = "block"  
}

function onFormSubmit() {
    var formData = readFormData()
    if (selectedRow == null)
        insertNewRecord(formData)
    else
        updateRecord(formData)
    resetForm()
}

function readFormData() {
    var formData = {}
    formData["name"] = document.getElementById("name").value
    formData["age"] = document.getElementById("age").value
    return formData
}

function insertNewRecord(data) {
    var isAllow = true
    var table = document.getElementById("data").getElementsByTagName('tbody')[0]

    var newRow = table.insertRow(table.length)

    nameArray.push(data.name)

    // console.log(nameArray[nameArray.length - 1])

    //for validation
    if (nameArray.length >= 2) {
        for (i = nameArray.length - 2; i >= 0; i--) {
            if (data.name == nameArray[i]) {
                nameArray.pop(data.name)
                alert("Duplicate Name Occurs")
                isAllow = false
            }
        }
    }
    
    // console.log(nameArray)
    if (isAllow) {
        uid++
        cell1 = newRow.insertCell(0)  //id
        cell1.innerHTML = uid

        cell2 = newRow.insertCell(1) //name
        cell2.innerHTML = data.name

        cell3 = newRow.insertCell(2) //age
        cell3.innerHTML = data.age

        cell4 = newRow.insertCell(3)
        cell4.innerHTML = `<button onClick="onEdit(this)">Edit</button>
                           <button onClick="onDelete(this)">Delete</button>`;
    }
}

function resetForm() {
    document.getElementById("name").value = ""
    document.getElementById("age").value = ""
    selectedRow = null
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement //for corresponding row element
    document.getElementById("name").value = selectedRow.cells[1].innerHTML
    document.getElementById("age").value = selectedRow.cells[2].innerHTML
}
function buttonControl(){
    if(document.getElementById("name").value == selectedRow.cells[1].innerHTML){
        document.getElementById("submit").disabled = true
    }
    else{
        document.getElementById("submit").disabled = false
    }
}
function updateRecord(formData) {
    var canUpdate = true
    nameArray.push(formData.name)
    if (nameArray.length >= 2) {
        for (i = nameArray.length - 2; i >= 0; i--) {
            if (formData.name == nameArray[i]) {
                nameArray.pop(formData.name)
                alert("This Name already exists")
                canUpdate = false
            }
        }
    }
    // console.log(nameArray)
    if(canUpdate){
        selectedRow.cells[1].innerHTML = formData.name
        selectedRow.cells[2].innerHTML = formData.age
    }
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement
        nameArray.pop(row.cells[1].innerHTML)
        if(nameArray.length == 0){
			uid = 0
            document.getElementById("data").style.display = "none"
        }
        document.getElementById("data").deleteRow(row.rowIndex)
        resetForm()
    }
}
