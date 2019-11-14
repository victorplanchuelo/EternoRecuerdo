<script src="{{ secure_asset('js/choices.js') }}"></script>
<script>
    const customSelects = document.querySelectorAll("select");
    const deleteBtn = document.getElementById('delete')
    const choices = new Choices('select', {
        searchEnabled: false,
        itemSelectText: '',
        removeItemButton: true,
    });
    deleteBtn.addEventListener("click", function(e) {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++) {
            deleteAll[i].click();
        }
    });
</script>