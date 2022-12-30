$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//Xóa danh mục
function removeRow(id, url)
{
    if(confirm('Giữ liệu sẽ bị xóa và không thể khôi phục!'))
    {
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: { id },
            url: url,
            success: function(result)
            {
                if (result.error === false) {
                    alert(result.message);
                    location.reload();
                }
                else {
                    alert('Xóa lỗi vui lòng thử lại');
                }
            }
        })
    }
};
