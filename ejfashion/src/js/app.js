// JavaScript code for CRUD operations and DataTables initialization

let entries = [];
let currentIndex = -1;

document.addEventListener('DOMContentLoaded', function() {
    const dataTable = $('#dataTable').DataTable();

    document.getElementById('entryForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(event.target);
        const entry = {
            id: currentIndex === -1 ? entries.length + 1 : currentIndex + 1,
            name: formData.get('name'),
            email: formData.get('email'),
            phone: formData.get('phone')
        };

        if (currentIndex === -1) {
            entries.push(entry);
            dataTable.row.add([entry.id, entry.name, entry.email, entry.phone, 
                `<button class="btn btn-warning" onclick="editEntry(${entry.id})">Edit</button>
                 <button class="btn btn-danger" onclick="deleteEntry(${entry.id})">Delete</button>`]).draw();
        } else {
            entries[currentIndex] = entry;
            dataTable.row(currentIndex).data([entry.id, entry.name, entry.email, entry.phone, 
                `<button class="btn btn-warning" onclick="editEntry(${entry.id})">Edit</button>
                 <button class="btn btn-danger" onclick="deleteEntry(${entry.id})">Delete</button>`]).draw();
            currentIndex = -1;
        }

        event.target.reset();
    });
});

function editEntry(id) {
    const entry = entries.find(e => e.id === id);
    if (entry) {
        document.getElementById('name').value = entry.name;
        document.getElementById('email').value = entry.email;
        document.getElementById('phone').value = entry.phone;
        currentIndex = entries.indexOf(entry);
    }
}

function deleteEntry(id) {
    entries = entries.filter(e => e.id !== id);
    $('#dataTable').DataTable().clear().rows.add(entries.map(entry => [
        entry.id, entry.name, entry.email, entry.phone, 
        `<button class="btn btn-warning" onclick="editEntry(${entry.id})">Edit</button>
         <button class="btn btn-danger" onclick="deleteEntry(${entry.id})">Delete</button>`
    ])).draw();
}