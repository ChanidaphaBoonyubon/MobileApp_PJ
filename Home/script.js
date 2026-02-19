const navItems = document.querySelectorAll(".nav-item");

navItems.forEach((item) => {
    item.addEventListener("click", () => {
        // 1. เอา class 'active' ออกจากทุกอันก่อน
        navItems.forEach((nav) => nav.classList.remove("active"));
        
        // 2. ใส่ class 'active' ให้กับอันที่ถูกกด
        item.classList.add("active");
    });
});