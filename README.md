# FarmLink — Agricultural Cold Chain & Marketplace

A web-based platform connecting Farmers, Cold Storage Operators, Commercial Produce Vendors, and System Administrators into a synchronized, transparent post-harvest ecosystem.

---

## Key Modules & Roles
- **Farmer Module (`farmer/`):** Crop harvest listings, cold storage bay reservations, Digital Warehouse Receipts (DWR), and direct vendor offer management.
- **Operator Console (`operator/`):** Produce intake inspection, quality grading, moisture testing, multi-climate bay allocation, and storage dispatch.
- **Vendor Marketplace (`vendor/`):** Certified inventory browsing, lot procurement contracts, real-time quality logs, and dockside pickup scheduling.
- **Admin Governance (`admin/`):** Facility certification, regional telemetry monitoring, price transparency index, and system audit logs.

---

## Project Structure
```
fms/
├── index.php                # Landing page & platform overview
├── login.php                # Unified role authentication portal
├── register.php             # General registration
├── farmer-register.php      # Farmer registration with land/crop details
├── customer-register.php    # Customer/Vendor registration
├── cart.php                 # Procurement cart & order checkout
├── orders.php               # Live order tracking
├── products.php             # Produce catalog
├── admin/                   # System Administrator dashboard & reports
├── farmer/                  # Farmer harvest & bay booking portal
├── operator/                # Cold storage facility operator console
├── vendor/                  # Commercial buyer marketplace
├── includes/                # Shared headers, footers, auth & session utilities
├── config/                  # Database connection & system constants
└── assets/                  # Centralized stylesheet (CSS), scripts (JS), and media
```

---

## Technical Stack
- **Backend:** PHP 8+ with MySQL database
- **Frontend:** Semantic HTML5, Vanilla JavaScript, CSS3 with Custom Properties
- **Typography:** Instrument Sans & Inter
- **Icons:** Font Awesome 6 & Inline SVGs
