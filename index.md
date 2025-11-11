<nav style="text-align:right; font-size:0.9rem; margin-bottom:20px;">
  <a href="index.html"> Home</a> |
  <a href="/blog.html">Blog</a> |
  <a href="/contact.html">Contact</a> |
  <a href="/resume.html" target="_blank">Resume</a>

</nav>

---

## 👋 Hi, I’m @ewanoleghe – Cybersecurity Analyst & Offensive Security Engineer

<hr>

🔐 **SOC Analyst | Penetration Tester | OT/ICS Security Enthusiast**  
Former full-stack developer with **15+ years in secure software engineering**, now focused on **threat detection, incident response, penetration testing, and operational technology (OT) security**. Certified in **CompTIA Security+** and **AWS Cloud Practitioner**, actively pursuing **OSCP** and **CySA+**.

---

### 🛡️ Cybersecurity Expertise
- 🔍 **SOC Operations**: SIEM (Splunk, Microsoft Sentinel, ELK), EDR (Carbon Black), phishing analysis, threat hunting
- 🧨 **Offensive Security**: Penetration testing with **Metasploit, Nmap, Burp Suite, Wireshark**, Nessus, privilege escalation
- ☁️ **Cloud & Infrastructure**: AWS IAM, GuardDuty, CloudTrail, Zero Trust, secure network architecture
- 🏭 **OT/ICS Security**: Modbus/BACnet simulation, Purdue Model, ISA/IEC 62443 alignment
- 🐍 **Security Automation**: Python (Pandas, NumPy) for log correlation, anomaly detection, Splunk dashboarding

---

### 🧪 Active Labs & Red Team Training
- **Hack The Box CPTS** (In Progress) – 15+ machines, focus on Linux/Windows privilege escalation
- **OSCP Labs** – Buffer overflows, web app exploitation, Active Directory attacks
- **SIEM Home Lab** – Splunk-based SOC simulation with real-time threat detection & NIST 800-61 workflows
- **Container & API Hardening** – Trivy/Clair scans, OWASP Top 10 testing with Burp Suite/Postman
- **ICS Cyber Range** – Simulated attacks on industrial protocols (Modbus, BACnet)

---

### 🔬 Currently Mastering
- Advanced **Active Directory attacks** & **lateral movement**
- **Purple teaming** & **MITRE ATT&CK** framework mapping
- **YARA**, **Sigma**, and **custom detection rules** for SIEM
- **Kotlin** for secure mobile app development

---

### MITRE ATT&CK in Practice
| Tactic | Technique | Application |
|--------|-----------|-----------|
| Initial Access | T1190 – Exploit Public App | Laravel debug mode → RCE |
| Execution | T1059.006 – Python | Reverse shell via cron |
| Persistence | T1053 – Scheduled Task | `at` job + encoded payload |
| Privilege Escalation | T1068 – Kernel Exploit | Dirty COW, SUID binary |
| Defense Evasion | T1070.004 – Log Clear | `shred`, `wevtutil cl` |
| Lateral Movement | T1021.001 – RDP | Pass-the-Hash + RDP |
| Exfiltration | T1041 – C2 Channel | DNS tunneling, HTTPS POST |

---

### OSCP Preparation Guide (90-Day Roadmap)

#### Phase 1: Foundation (Weeks 1–3)
- Master **Linux/Windows CLI**, `netstat`, `wmic`, `tasklist`
- Complete **TJNull’s HTB List** (50 retired boxes)
- Write **one-liner enumeration scripts**

#### Phase 2: Methodology (Weeks 4–6)
```bash
nmap -sC -sV -p- --min-rate 1000 -oA scan <IP>
gobuster dir -u http://<IP> -w medium.txt -x php,html,txt
```
---

### 🤝 Let’s Collaborate On
- Open-source **SIEM detection content** (Splunk, Sigma)
- **Penetration testing tools** & **exploit development**
- **OT security automation** (IaC, Ansible, Python)
- **Threat intelligence platforms** & **automated phishing triage**

---

### 📫 Reach Me
<a href="https://twitter.com/e_oleghe"><code><img height="20" src="https://github.com/johan/svg-cleanups/blob/master/logos/twitter.svg"></code> Twitter (@e_oleghe)</a>  
📧 ewan.mails -{at}- gmail -|dot|- com  
🔗 [LinkedIn](https://www.linkedin.com/in/ewan-o-8b9477108/) | [GitHub](https://github.com/ewanoleghe)

---

### 🧰 Cybersecurity & Tools Arsenal

<p align="center">
  <img src="https://cdn.iconscout.com/icon/free/png-512/aws-1869025-1583149.png" alt="AWS" height="25" style="margin:5px;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python" height="25" style="margin:5px;">
  <img src="https://www.splunk.com/content/dam/splunk-blogs/images/2018/splunk-logo.png" alt="Splunk" height="25" style="margin:5px;">
  <img src="https://learn.microsoft.com/en-us/media/illustrations/azure-sentinel-logo.png" alt="Microsoft Sentinel" height="25" style="margin:5px;">
  <img src="https://cdn.iconscout.com/icon/free/png-256/carbon-black-3629003-3025589.png" alt="Carbon Black" height="25" style="margin:5px;">
  <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/metasploit_logo_icon_168275.png" alt="Metasploit" height="25" style="margin:5px;">
  <img src="https://portswigger.net/cms/images/01/4e/6b/7b/burp-suite-logo.png" alt="Burp Suite" height="25" style="margin:5px;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6f/Nmap-logo.svg" alt="Nmap" height="25" style="margin:5px;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Wireshark_icon.svg" alt="Wireshark" height="25" style="margin:5px;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Docker_%28container_engine%29_logo.svg" alt="Docker" height="25" style="margin:5px;">
  <img src="https://cdn.icon-icons.com/icons2/1381/PNG/512/kali-linux_89633.png" alt="Kali Linux" height="25" style="margin:5px;">
</p>


---

<!--- ewanoleghe/ewanoleghe is a ✨ special ✨ repository because its `README.md` appears on your GitHub profile. --->
