# MRTG Manager Apps

Sistem aplikasi MRTG (Multi Router Traffic Grapher) berbasis PHP 8.3+ dengan SNMP polling, MRTG config generator, dan monitoring multi-router untuk MikroTik, Cisco, dan generic SNMP devices.

## Fitur Utama
- Dashboard UI modern + sidebar
- Multi Router Management
- SNMP v1 / v2c / v3
- SNMP Test Connection
- SNMP Auto Discovery Interface
- Interface Management
- Queue Management (foundation)
- PPPoE Management (foundation)
- Live Monitoring dengan Chart.js
- MRTG Config Generator + Deploy
- Cron Poller System
- REST API v1
- API Bearer Token / API Key
- Audit Log
- Alert Event System
- Dark Mode

## Stack
- Ubuntu 24.04 LTS
- Apache 2.4
- PHP 8.3+
- MariaDB 11+
- MRTG
- SNMP

## Direktori
- App Dir: `/var/www/apps`
- MRTG Dir: `/var/www/mrtg`
- MRTG CFG: `/etc/mrtg`
- Log Dir: `/var/log/apps`

## Default URL
- `http://localhost`

## Login Default
- Username: `admin`
- Password: sesuaikan dengan hash yang Anda seed

## Catatan Produksi
Untuk Queue dan PPPoE real-time penuh, direkomendasikan penambahan MikroTik RouterOS API collector agar statistik lebih akurat dan universal pada perangkat MikroTik.