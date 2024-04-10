import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useSelector } from 'react-redux';
import { AnimatePresence } from "framer-motion"
import { usePage } from "@inertiajs/react"
import Sidebar from '@/Dashboard_Components/Sidebar';
import Student from './Student/Student';
import Reward from './Reward/Reward';

export default function Dashboard({ auth }) {
    const { sideOpen, selectItem } = useSelector((state) => state.sidebar);
    const { user, rewards_name, rewards, students } = usePage().props;

    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Dashboard" />
            <main className='flex'>
                <AnimatePresence>
                    {sideOpen &&
                        <Sidebar />}
                </AnimatePresence>

                <div className="pt-12  w-full">
                    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 m-5 overscroll-x-contain">
                        {selectItem === "Students" ? <Student students={students} /> :
                            selectItem === "Chats" ? <Reward /> :
                                selectItem === "Rewards" ? <Reward /> :
                                    selectItem === "Profile" ? <Reward /> :
                                        selectItem === "Setting" ? <Reward /> :
                                            (
                                                <div>Dashboard</div>
                                            )
                        }
                    </div>
                </div>
            </main>
        </AuthenticatedLayout >
    );
}
