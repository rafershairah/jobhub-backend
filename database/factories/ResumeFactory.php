<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resume>
 */
class ResumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      
        $skills = ['Proficient in programming languages like Python and Java',
        'Experienced in network administration and troubleshooting',
        'Skilled in database management with SQL',
        'Familiar with front-end web development using HTML, CSS, and JavaScript',
        'Adept at cloud computing platforms like AWS and Azure',
        'Expertise in cybersecurity and threat detection',
        'Proficient in system and server administration',
        'Knowledge of data analysis and visualization tools like Tableau',
        'Experienced in software testing and quality assurance',
        'Skilled in mobile app development for iOS and Android',
        'Adept at data mining and machine learning',
        'Familiar with agile and DevOps methodologies',
        'Expertise in virtualization technologies',
        'Proficient in IT project management',
        'Experienced in configuring and managing routers and switches',
        'Knowledge of containerization with Docker and Kubernetes',
        'Skilled in web application security',
        'Adept at data warehousing and ETL processes',
        'Familiar with IT infrastructure design and optimization',
        'Expertise in IT helpdesk support and customer service'];

        $work_experience=[
            "Software Developer responsible for coding and maintaining software applications, Network Administrator managing and maintaining an organization's computer networks.",
            "Data Analyst analyzing data to provide insights and support decision-making, Systems Administrator overseeing the configuration and maintenance of servers and systems.",
            "Database Administrator responsible for managing and optimizing databases, Web Developer designing and building websites and web applications.",
            "Cybersecurity Analyst protecting an organization's IT infrastructure from security threats, IT Support Specialist providing technical assistance and support to end-users.",
            "Cloud Solutions Architect designing and managing cloud infrastructure solutions, Mobile App Developer creating mobile applications for iOS and Android platforms.",
            "Data Scientist utilizing data to extract valuable insights for business, Agile Project Manager leading and facilitating Agile software development projects.",
            "Virtualization Specialist managing virtualization technologies like VMware, IT Project Manager overseeing IT projects from initiation to completion.",
            "Network Engineer designing, implementing, and maintaining network solutions, Docker and Kubernetes Specialist managing containerization and orchestration.",
            "Web Security Analyst protecting websites and applications from cyber threats, ETL Developer designing and implementing data integration solutions.",
            "IT Infrastructure Architect designing and optimizing IT infrastructure for efficiency.",
            "AI Engineer developing artificial intelligence algorithms for machine learning applications, Data Engineer managing and optimizing data pipelines for analysis.",
            "UX Designer creating user-friendly interfaces and enhancing the user experience, Network Security Specialist protecting networks and systems from cyber threats.",
            "Cloud DevOps Engineer automating and optimizing cloud infrastructure, IT Business Analyst bridging the gap between IT and business needs.",
            "Front-End Developer designing and implementing the user interface of websites and applications, IT Sales Specialist promoting and selling IT solutions and services.",
            "Quality Assurance Tester ensuring the quality and functionality of software applications, Big Data Analyst handling and analyzing vast sets of data.",
            "Blockchain Developer working on decentralized ledger technologies, IT Consultant advising businesses on IT strategy and solutions.",
            "AI Research Scientist conducting research in artificial intelligence and machine learning, Hardware Engineer designing and developing computer hardware components.",
            "Network Administrator maintaining and optimizing computer networks, Cloud Solutions Consultant helping organizations migrate to cloud services.",
            "Cybersecurity Engineer protecting digital assets from cyber threats, Software Architect designing software systems and structures.",
            "Scrum Master facilitating Agile development processes and team collaboration, Data Privacy Officer ensuring data protection and compliance.",
        ];

        $education = [
            "Bachelor's degree in Computer Science", 
            "Bachelor's degree in Information Technology", 
            "Bachelor's degree in Software Engineering", 
            "Bachelor's degree in Computer Engineering", 
            "Bachelor's degree in Electrical Engineering", 
            "Bachelor's degree in Cybersecurity", 
            "Bachelor's degree in Data Science", 
            "Bachelor's degree in Network Engineering", 
            "Bachelor's degree in Web Development", 
            "Bachelor's degree in Business Information Systems", 
            "Bachelor's degree in Mathematics", 
            "Bachelor's degree in Artificial Intelligence", 
            "Bachelor's degree in Computer Graphics", 
            "Bachelor's degree in Cloud Computing", 
            "Bachelor's degree in Mobile App Development", 
            "Bachelor's degree in Database Management", 
            "Master's degree in Information Systems", 
            "Master's degree in Computer Science", 
            "Master's degree in IT Management", 
            "Master's degree in Cybersecurity"
        ];

       
        return [
            'user_id' => auth()->id(), 
            'Skills' => $this->faker->randomElement($skills),
            'Work Experience' => $this->faker->randomElement($work_experience),
            'Education' => $this->faker->randomElement($education),
            'Contact Info' => $this->faker->unique()->safeEmail(),
        ];
}
}