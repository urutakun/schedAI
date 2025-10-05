export interface TeamMember {
  id: number;
  name: string;
  role: string;
  img: string;
  alt_img: string;
}

export const team: TeamMember[] = [
  {
    id: 1,
    name: 'Daryl Cortes',
    role: 'Backend Developer',
    img: '/assets/images/devs/dev.png',
    alt_img: '/assets/images/devs/dev2.png'
  },
  {
    id: 2,
    name: 'Jieselle May',
    role: 'UI/UX Designer',
    img: '/assets/images/devs/dev.png',
    alt_img: '/assets/images/devs/dev2.png'
  },
  {
    id: 3,
    name: 'Daryl Cortes',
    role: 'Data Analyst',
    img: '/assets/images/devs/dev.png',
    alt_img: '/assets/images/devs/dev2.png'
  },
  {
    id: 4,
    name: 'Walter Gagate',
    role: 'Frontend Developer',
    img: '/assets/images/devs/dev.png',
    alt_img: '/assets/images/devs/dev2.png'
  },
]
