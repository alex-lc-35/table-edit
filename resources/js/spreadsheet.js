import jspreadsheet from 'jspreadsheet-ce'
import 'jspreadsheet-ce/dist/jspreadsheet.css'
import 'jspreadsheet-ce/dist/jspreadsheet.themes.css'

document.addEventListener('DOMContentLoaded', () => {
    const el = document.getElementById('spreadsheet')
    if (el) {
        jspreadsheet(el, {
            tabs: true,
            worksheets: [{
                minDimensions: [6, 6],
            }],
        })
    }
})
