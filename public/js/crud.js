function handleDeleteNote(url) {
    console.log(url);
    $('#form-delete').attr('action', url);

}
function handleEdit(url, note) {
    console.log(note);
    $('#form-update').attr('action', url);
    $('#title-edit').val(note.title);
    $('#content-edit').val(note.content);
    $('#deadline-edit').val(note.deadline);
    $('#editor-edit').html(note.content);
}