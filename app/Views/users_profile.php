<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .profile-card {
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .profile-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #4338ca 0%, #6d28d9 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-secondary:hover {
            background: linear-gradient(135deg, #047857 0%, #065f46 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
        }
        
        .profile-avatar {
            transition: all 0.3s ease;
        }
        
        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .info-card {
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .info-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px -12px rgba(0, 0, 0, 0.15);
        }
        
        .status-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            position: relative;
            overflow: hidden;
        }
        
        .status-badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .status-badge:hover::before {
            left: 100%;
        }
        
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }
        
        
        .floating-circle:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .floating-circle:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .floating-circle:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .section-card {
            transition: all 0.3s ease;
        }
        
        .section-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen relative">
    <!-- Floating Background Elements -->
    <div class="floating-elements">
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
    </div>
    
    <!-- Navbar include would go here -->
    <?= $this->include('layout/navbar') ?>   
    
    <!-- Profile Container -->
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Profile Header Card -->
            <div class="profile-card bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100 mb-8">
                <!-- Cover Background -->
                <div class="gradient-bg h-32 relative">
                    <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                </div>
                
                <!-- Profile Content -->
                <div class="relative px-8 pb-8">
                    <!-- Profile Avatar -->
                    <div class="absolute -top-16 left-8">
                        <div class="profile-avatar relative">
                            <img class="w-32 h-32 rounded-full border-4 border-white shadow-lg object-cover" 
                                 src="<?= $detail->user_image?>" 
                                 alt="Profile Picture" />
                            <!-- Online Status Indicator -->
                            <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-500 border-2 border-white rounded-full"></div>
                        </div>
                    </div>
                    
                    
                    <!-- Profile Info -->
                    <div class="pt-20">
                        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between">
                            <div class="flex-1">
                                <h1 class="text-3xl font-bold text-gray-900 mb-2">
                                    <?= $detail->username ?>
                                </h1>
                                <div class="flex items-center text-gray-600 mb-4">  
                                    <span class="text-lg"><?= $detail->email?></span>
                                </div>
                            
                            </div>
                            
                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3 mt-4 sm:mt-0">
                                <a href="<?= base_url('profile/edit') ?>" 
                                   class="btn-primary px-6 py-3 text-white font-medium rounded-2xl">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                    Edit Profile
                                </a>
                                <?php if(in_groups('admin')): ?>
                                <a href="<?= base_url('admin/dashboard') ?>" 
                                   class="btn-secondary px-6 py-3 text-white font-medium rounded-2xl">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                    Admin Panel
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Details Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Personal Information -->
                <div class="section-card bg-white rounded-3xl shadow-lg p-8 border border-gray-100 md:col-span-2">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Personal Information</h2>
                    </div>

                    <div class="space-y-6">
                        <div class="info-card bg-gray-50 rounded-2xl p-4">
                            <label class="block text-sm font-medium text-gray-500 mb-1">Full Name</label>
                            <p class="text-lg font-semibold text-gray-900"><?= $detail->username ?></p>
                        </div>

                        <div class="info-card bg-gray-50 rounded-2xl p-4">
                            <label class="block text-sm font-medium text-gray-500 mb-1">Username</label>
                            <p class="text-lg font-semibold text-gray-900"><?= $detail->username ?></p>
                        </div>

                        <div class="info-card bg-gray-50 rounded-2xl p-4">
                            <label class="block text-sm font-medium text-gray-500 mb-1">Email Address</label>
                            <p class="text-lg font-semibold text-gray-900"><?= $detail->email ?></p>
                        </div>

                        <div class="info-card bg-gray-50 rounded-2xl p-4">
                            <label class="block text-sm font-medium text-gray-500 mb-1">Phone Number</label>
                            <p class="text-lg font-semibold text-gray-900"><?= htmlspecialchars($user['phone'] ?? 'Not specified') ?></p>
                        </div>

                        <!-- Tombol Logout -->
                        <div class="flex justify-end pt-6">
                            <form action="<?= url_to('logout') ?>" method="post">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn-secondary px-6 py-3 text-white font-medium rounded-2xl flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 11-4 0v-1m0-4v-1a2 2 0 114 0v1" />
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>