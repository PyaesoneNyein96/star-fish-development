import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import Sidebar from '@/Dashboard_Components/Sidebar';
import { useSelector } from 'react-redux';
import { sidebarlist } from '@/Dashboard_Components/sidebar-list';
import { AnimatePresence } from "framer-motion"

export default function Dashboard({ auth }) {
    const sideOpen = useSelector((state) => state.sidebar.sideOpen);

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

                <div className="py-12">
                    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6 text-gray-900">You're logged in!</div>
                        </div>
                    </div>
                </div>
            </main>
        </AuthenticatedLayout >
    );
}
