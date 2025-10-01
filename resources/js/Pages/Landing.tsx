import { PageProps } from '@/types';
import { Head, Link } from '@inertiajs/react';
import Logo from './Components/Logo';

export default function Landing() {

    return (
      <div className='bg-white h-screen w-screen font-dm px-[15rem] py-[2rem]'>
        <nav>
          <div className="logo">
            <Logo height={30} width={30} color={'custom-secondary'} />
          </div>
        </nav>
      </div>
    );
}
