Đặng Nam Phương
Getting started WorkFlow of # Deha-Academy-Dev-php-git-Lab
1. Khởi tạo Repository
  git init
  git add README.md
  git commit -m "Initial commit: Add README"
  git remote add origin https://github.com/kevinkaraki240/html-git-practice.git
  git push -u origin main
2. Tạo nhánh Develop
  git checkout -b develop
  # Tạo file index.html với HTML/CSS hiện đại
  git add index.html
  git commit -m "Add index.html with modern design on develop branch"
  git push -u origin develop
  File tạo: index.html - Trang chủ với gradient background và navigation
3. Tạo nhánh Feature với 2+ commits
  commit 1: Tạo form đăng nhập
    git checkout -b feature/user-login
    # Tạo login.html với form đăng nhập đẹp mắt
    git add login.html
    git commit -m "Feature: Add login form with modern HTML/CSS design"
  commit 2: Thêm validation
    # Cập nhật login.html với JavaScript validation
    git add login.html
    git commit -m "Feature: Add input validation and real-time feedback"
    git push -u origin feature/user-login
  File tạo: login.html - Form đăng nhập có validation thời gian thực
4.  Tạo và Xử lý Conflict 
  Bước 1: Sửa file trên develop
    git checkout develop
    # Chỉnh sửa index.html - thêm tính năng quản lý
    git add index.html
    git commit -m "Update index with management features on develop"
    git push origin develop
  Bước 2: Sửa cùng file trên feature
    git checkout feature/user-login
    # Chỉnh sửa index.html - focus vào login
    git add index.html
    git commit -m "Update index for login-focused design"
  Bước 3: Merge và xử lý conflict
    git merge develop
    # CONFLICT xảy ra tại index.html
    # Mở file, giải quyết conflict thủ công
    # Kết hợp cả 2 phiên bản
    git add index.html
    git commit -m "Resolve conflict: Merge develop into feature/user-login"
    git push origin feature/user-login
  Conflict location: index.html - Phần <h1> và <nav>
  Resolution: Kết hợp cả 2 phiên bản, giữ lại tính năng từ cả develop và feature
5. Tạo Pull Request
Pull Request #1: Merge develop → main
  Reviewer: Giáo viên
  Status: ✅ Merged (Commit: 260f0c2)
  Changes:
  Thêm index.html vào main branch
  Tích hợp tính năng từ develop
Link PR: [https://github.com/kevinkaraki240/html-git-practice/pull/1](https://github.com/kevinkaraki240/Deha-Academy-Dev-php-git-workflow/pull/1)
6. Tạo Hotfix Branch
  git checkout main
  git checkout -b hotfix/security-fix
  # Tạo security-patch.php với các bản vá bảo mật
  git add security-patch.php
  git commit -m "Hotfix: Fix SQL Injection, XSS, and add CSRF protection"
  git push -u origin hotfix/security-fix
  # Merge vào main
  git checkout main
  git merge hotfix/security-fix
  git push origin main
  # Merge vào develop (quan trọng!)
  git checkout develop
  git merge hotfix/security-fix
  git push origin develop
File tạo: security-patch.php - Vá các lỗ hổng bảo mật nghiêm trọng:
SQL Injection
XSS (Cross-Site Scripting)
CSRF Protection

*Git Commands đã sử dụng
  Quản lý branches
    git branch              # Xem danh sách branches
    git checkout -b <name>  # Tạo branch mới
    git checkout <name>     # Chuyển branch
    git branch -a           # Xem tất cả branches (local + remote)
  Quản lý commits
    git add <file>          # Thêm file vào staging area
    git commit -m "msg"     # Commit với message
    git log --oneline       # Xem lịch sử commits ngắn gọn
    git log --graph --all   # Xem commits dạng đồ thị
  Làm việc với remote
    git remote add origin <url>  # Kết nối với GitHub
    git push -u origin <branch>  # Push branch lần đầu
    git push origin <branch>     # Push updates
    git pull origin <branch>     # Pull updates từ remote
Để xem toàn bộ luồng làm việc dưới dạng đồ thị: git log --oneline --graph --all --decorate
