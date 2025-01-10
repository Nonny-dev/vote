 // เมนูมือถือ
 document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
    document.querySelector('.main-nav').classList.toggle('active');
});

// ฟังก์ชันการค้นหาและกรอง
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.querySelector('.search-input');
    const filterSelects = document.querySelectorAll('.filter-select');
    const candidateCards = document.querySelectorAll('.candidate-card');

    // ฟังก์ชันกรองการ์ด
    function filterCards() {
        const searchTerm = searchInput.value.toLowerCase();
        const partyFilter = filterSelects[0].value;
        const districtFilter = filterSelects[1].value;
        const sortBy = filterSelects[2].value;

        // กรองและซ่อน/แสดงการ์ด
        candidateCards.forEach(card => {
            const name = card.querySelector('.candidate-name').textContent.toLowerCase();
            const number = card.querySelector('.candidate-number').textContent;
            const party = card.querySelector('.candidate-party').textContent;
            const district = card.querySelector('p').textContent;

            const matchesSearch = name.includes(searchTerm) || 
                                number.includes(searchTerm);
            const matchesParty = !partyFilter || party.includes(partyFilter);
            const matchesDistrict = !districtFilter || district.includes(districtFilter);

            if (matchesSearch && matchesParty && matchesDistrict) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        // จัดเรียงการ์ด
        const cardsArray = Array.from(candidateCards);
        if (sortBy) {
            cardsArray.sort((a, b) => {
                switch(sortBy) {
                    case 'number':
                        return parseInt(a.querySelector('.candidate-number').textContent) - 
                               parseInt(b.querySelector('.candidate-number').textContent);
                    case 'name':
                        return a.querySelector('.candidate-name').textContent.localeCompare(
                            b.querySelector('.candidate-name').textContent
                        );
                    case 'party':
                        return a.querySelector('.candidate-party').textContent.localeCompare(
                            b.querySelector('.candidate-party').textContent
                        );
                    default:
                        return 0;
                }
            });

            // จัดเรียงใหม่ใน DOM
            const container = document.querySelector('.candidates-grid');
            cardsArray.forEach(card => container.appendChild(card));
        }
    }

    // เพิ่ม event listeners
    searchInput.addEventListener('input', filterCards);
    filterSelects.forEach(select => {
        select.addEventListener('change', filterCards);
    });

    // แสดงจำนวนผลลัพธ์
    function updateResultCount() {
        const visibleCards = document.querySelectorAll('.candidate-card[style="display: block;"]');
        const totalCards = document.querySelectorAll('.candidate-card');
        const resultCount = document.createElement('div');
        resultCount.className = 'result-count';
        resultCount.textContent = `แสดง ${visibleCards.length} จาก ${totalCards.length} รายการ`;
        
        // อัปเดตหรือเพิ่มการแสดงผล
        const existingCount = document.querySelector('.result-count');
        if (existingCount) {
            existingCount.textContent = resultCount.textContent;
        } else {
            document.querySelector('.candidates-container h1').after(resultCount);
        }
    }

    // เพิ่ม event listener สำหรับอัปเดตจำนวนผลลัพธ์
    const originalFilterCards = filterCards;
    filterCards = function() {
        originalFilterCards();
        updateResultCount();
    };

    // เรียกใช้ครั้งแรกเพื่อแสดงจำนวนเริ่มต้น
    updateResultCount();
});