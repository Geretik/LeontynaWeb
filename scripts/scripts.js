let currentPage = 1;
    const rowsPerPage = 1;
    const rows = document.querySelectorAll('.page-row');
    const totalPages = Math.ceil(rows.length / rowsPerPage);
  
    function displayRows()
    {
      rows.forEach((row, index) =>
      {
        row.style.display = (index >= (currentPage - 1) * rowsPerPage && index < currentPage * rowsPerPage) ? '' : 'none';
      });
      
      document.getElementById('prev').style.display = 'inline-block';
      document.getElementById('next').style.display = 'inline-block';
      
      for (let i = 1; i <= totalPages; i++)
      {
        const pageItem = document.getElementById(`page-${i}`);
        if (i === currentPage)
        {
          pageItem.classList.add('active');
        }
        else
        {
          pageItem.classList.remove('active');
        }
      }
    }
  
    function changePage(page)
    {
      if (page === -1 && currentPage > 1)
      {
        currentPage--;
      }
      
      else if (page === 1 && currentPage < totalPages)
      {
        currentPage++;
      }
      
      else if (page > 0 && page <= totalPages && page )
      {
        currentPage = page;
      }

      displayRows();
    }
  
    // Inicializace zobrazení
    displayRows();




